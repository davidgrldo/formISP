<?php

namespace App\Http\Controllers;

use App\Models\MsCustomer;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customer = MsCustomer::count();
        $user = User::count();
        return view('home', compact('customer','user'));
    }
}