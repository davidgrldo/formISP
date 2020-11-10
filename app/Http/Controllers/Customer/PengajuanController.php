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
use Novay\WordTemplate\WordTemplate;

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
                'no_pendaftaran' => Carbon::now()->format('d/m/Y') . '/' . generate_invoice(10),
                'name'          => $request->name,
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
        $item = MsPengajuan::find($id);
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
        $data = MsPengajuan::all();

        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('name', function ($item) {
                return '<a href="' . route('pengajuan.show', $item->id) . '">' . $item->name . '</a>';
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
        $file = public_path('/files/output.rtf');
        $data = MsPengajuan::where('token', $token)->first();
        $array = array(
            '[NO_AUTO]' =>  $data->no_pendaftaran,
            '[TANGAL_BULAN]' => $data->created_at->format('d/m/Y'),
            '[PENDAFTAR]' => $data->name,
            '[DATE]' => $data->created_at->format('d/m/Y')
        );

        $nama_file = 'surat-kerjasama.docx';

        return WordTemplate::export($file, $array, $nama_file);
    }
}
