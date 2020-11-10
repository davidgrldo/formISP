<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Customer\CustomerRegisterRequest;
use App\Http\Requests\Customer\CustomerLoginRequest;
use App\Models\MsCustomer;
use Auth;


class CustomerAuthController extends Controller
{
    public function login(CustomerLoginRequest $request)
    {
        $data = MsCustomer::where('email', $request->email)->first();
        if (Auth::guard('customer')->attempt([
            'email' => $request->email,
            'password' => $request->password
            ])
        ) {
            return redirect('pages/profil');
        } else {
            return redirect('pages/login')->with(["error" => 'Error']);
        }
    }

    public function register(CustomerRegisterRequest $data)
    {
        MsCustomer::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'address' => $data['address'],
            'company_name' => $data['company_name'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect('/pages/login');
    }


    public function logout(Request $request)
    {
       Auth::guard('customer')->logout();
        return redirect('/pages/login');
    }
}
