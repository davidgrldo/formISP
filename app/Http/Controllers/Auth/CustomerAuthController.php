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
        $data = MsCustomer::where('email', $request->email)->first();
        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('pages/dashboard');
        } else {
            return response()->json(['message' => 'Login Gagal'], 302);
        }
    }

    public function logout()
    {
        Auth::guard('pages')->logout();
        return redirect("/pages/login");
    }

    public function register()
    {
        return view('auth.customer.register');
    }
}
