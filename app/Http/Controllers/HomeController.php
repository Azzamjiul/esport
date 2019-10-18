<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Team_Detail;

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
        if(Auth::User()->type != 0)
            return redirect('operator/dashboard');
        else{
            $data = Auth::user();
            $daftar = User::where('type', '=', '0')->count();
            $belumconfirm = User::where('bukti_bayar', '!=', NULL)->where('registration_status', '=', '0')->count();
            $sudahconfirm = User::where('registration_status', '=', '1')->where('type', '=', '0')->count();
            $team_detail = Team_Detail::where('fk_team_id', '=', Auth::user()->id)->where('validation_status', '=', -1)->get();
            // return $team_detail;
            return view('home', compact('data', 'daftar', 'belumconfirm', 'sudahconfirm', 'team_detail'));
        }
        
    }
}
