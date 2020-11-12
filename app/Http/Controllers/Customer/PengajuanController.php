<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Pengajuan\PengajuanRequest;
use App\Models\MsPengajuan;
use DB;
use Carbon\Carbon;
use Str;
use Yajra\DataTables\DataTables;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.pengajuan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options = $this->listing();
        return view('pages.pengajuan.create_edit', compact('options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PengajuanRequest $request)
    {
        try {
            DB::beginTransaction();

            MsPengajuan::create([
                'no_pendaftaran' => "CT" . generate_invoice(10),
                'customer_id'   => auth('customer')->user()->id,
                'no_ktp'        => $request->no_ktp,
                'image_ktp'     => $request->file('image_ktp')->store(
                    'assets/ktp',
                    'public'
                ),
                'no_npwp'       => $request->no_npwp,
                'image_npwp'    => $request->file('image_npwp')->store(
                    'assets/npwp',
                    'public'
                ),
                'address'       => $request->address,
                'brand_name'    => $request->brand_name,
                'type'          => $request->type,
                'token'         => Str::random(32),
            ]);

            DB::commit();
            return response()->json(['message' => 'Pengajuan successfully added.'], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $item = MsPengajuan::with('customer')->find($id);
        return view('pages.pengajuan.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function listing()
    {
        $layanan = ['Layanan' => 'Layanan', 'Subnetting' => 'Subnetting'];
        $options['layanan'] = $layanan;

        return $options;
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        MsPengajuan::whereIn('id', explode(',', $id))->restore();
        return response()->json(['message' => trans('lang.user_delete')], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        MsPengajuan::whereIn('id', explode(',', $id))->forceDelete();
        return response()->json(['message' => trans('lang.user_delete')], 200);
    }

    /**
     * Datatables User
     *
     * @return response
     * */
    public function data(Request $request)
    {
        $data = MsPengajuan::where('customer_id', auth('customer')->user()->id);

        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('no_ktp', function ($item) {
                return '<a href="' . route('pengajuan.show', $item->id) . '">' . $item->no_ktp . '</a>';
            })
            ->editColumn('deleted_at', function ($item) {
                $green = "<span style='color: green'><i class='icon-checkmark'></i></span>";
                $red = "<span style='color: red'><i class='icon-x'></i></span>";
                return is_null($item->deleted_at) ? $green : $red;
            })
            ->editColumn('status', function ($item) {
                if ($item->status == 'Pending') {
                    return "<label class='badge badge-warning'>Pending</label>";
                } elseif ($item->status == 'Disetujui') {
                    return "<label class='badge badge-success'>Disetujui</label>";
                } else {
                    return "<label class='badge badge-danger'>Tidak Disetujui</label>";
                }
            })
            ->escapeColumns([])
            ->make(true);
    }

    public function exportWord(Request $request, $token)
    {
        $data = MsPengajuan::where('token', $token)->first();
        $qrCode = QrCode::errorCorrection('H')->format('png')->merge('/public/images/logo1.png', .3)->size(200)->generate(url('/status/' . $data->token), public_path('files/qrcode.png'));
        $imageOption = ['path' => public_path('files/qrcode.png'), 'width' => 100, 'height' => 100, 'ratio' => false];
        $template = new \PhpOffice\PhpWord\TemplateProcessor(\public_path('files/output.docx'));
        $template->setValue('name', auth('customer')->user()->name);
        $template->setValue('no_auto', $data->no_pendaftaran);
        $template->setValue('tanggal_bulan', $data->created_at->format('d/m/Y'));
        $template->setValue('date', $data->created_at->format('d/m/Y'));
        $template->setImageValue('imageqr', $imageOption);
        $template->saveAs(public_path("files/surat_pengajuan-$data->no_pendaftaran.docx"));

        return response()->download(public_path("files/surat_pengajuan-$data->no_pendaftaran.docx"));
    }
}
