<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MsPengajuan;

class StatusController extends Controller
{
    public function index(Request $request, $token)
    {
        $item = MsPengajuan::with('customer')->where('token', $token)->first();
        return view('pages.pengajuan.status', compact('item'));
    }
}
