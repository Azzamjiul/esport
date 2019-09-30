<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
        $data = Auth::user();
        $daftar = User::where('type', '=', '0')->count();
        $belumconfirm = User::where('bukti_bayar', '!=', NULL)->where('registration_status', '=', '0')->count();
        $sudahconfirm = User::where('registration_status', '=', '1')->where('type', '=', '0')->count();
        return view('home', compact('data', 'daftar', 'belumconfirm', 'sudahconfirm'));
    }
}
