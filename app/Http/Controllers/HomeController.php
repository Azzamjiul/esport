<?php

namespace App\Http\Controllers;

use App\User;
use App\Team_Detail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        if(Auth::User()->type == 2)
            return redirect('operator/dashboard');
        else{
            $data = Auth::user();

            $next_match = DB::table('pertandingan')->where('id_name', Auth::user()->id)->where('status', 0)->first();
            if($next_match != NULL){
                if($next_match->id % 2 == 0){
                    $next_lawan = DB::table('pertandingan')->where('id', $next_match->id - 1)->where('status', 0)->first();
                }else{
                    $next_lawan = DB::table('pertandingan')->where('id', $next_match->id + 1)->where('status', 0)->first();
                }
                $enemy = User::find($next_lawan->id_name);
                $next_lawan_details = Team_Detail::where('fk_team_id', $next_lawan->id_name)->where('game_id','!=','default')->get();
                $team_details = Team_Detail::where('fk_team_id', $data->id)->where('game_id','!=','default')->get();
    
                return view('home', compact('data', 'enemy', 'next_lawan_details','team_details', 'next_match'));
            }else{
                $enemy = null;
                $next_lawan_details = null;
                $team_details = null;
                $next_match = null;
                return view('home', compact('data', 'enemy', 'next_lawan_details','team_details', 'next_match'));
            }
            
        }
        
    }
}
