<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\MsCustomer;

class CustomerAuthController extends Controller
{
    public function login(Request $request)
    {
        $data = MsCustomer::where('id', $request->id)->first();
        if (!$data) {
            return response()->json(['message' => 'Anda belum memiliki akun'], 302);
        }

        if (Auth::guard('customer')->attempt(['id' => $request->id, 'password' => $request->password])) {
            return response()->json(['message' => 'Login Berhasil'], 200);
        } else {
            return response()->json(['message' => 'Login Gagal'], 302);
        }
    }

    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect("/customer/login");
    }
}