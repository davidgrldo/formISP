<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MsCustomer;
use Illuminate\Http\Request;
use App\Models\MsPengajuan;
use DB;
use Yajra\DataTables\DataTables;

class PengajuanController extends Controller
{
    public function index()
    {
        return view('pages.user.pengajuan.index');
    }

    public function show(Request $request, $id)
    {
        $item = MsPengajuan::find($id);
        $customer = MsCustomer::find($id);
        return view('pages.user.pengajuan.show', compact('item', 'customer'));
    }

    public function data(Request $request)
    {
        $data = MsPengajuan::all();

        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('no_pendaftaran', function ($item) {
                return '<a href="' . route('request.show', $item->id) . '">' . $item->no_pendaftaran . '</a>';
            })
            ->editColumn('deleted_at', function ($item) {
                $green = "<span style='color: green'><i class='icon-checkmark'></i></span>";
                $red = "<span style='color: red'><i class='icon-x'></i></span>";
                return is_null($item->deleted_at) ? $green : $red;
            })
            ->editColumn('status', function($item) {
                if($item->status == 'Pending') {
                    return "<label class='badge badge-warning'>Pending</label>";
                } elseif($item->status == 'Disetujui') {
                    return "<label class='badge badge-success'>Disetujui</label>";
                } else {
                    return "<label class='badge badge-danger'>Tidak Disetujui</label>";

                }
            })
            ->escapeColumns([])
            ->make(true);
    }

    public function setStatus(Request $request)
    {
        $data = $request->type;
        $query = MsPengajuan::find($request->id);
        if($data == 'setuju') {
            $query->update(['status' => 'Disetujui']);
        } else {
            $query->update(['status' => 'Tidak Disetujui']);
        }

        return response()->json(['message' => "Status $query->status"],200);
    }
}
