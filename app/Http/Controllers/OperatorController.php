<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\User;
use App\Team_Detail;
use Illuminate\Support\Facades\Auth;

class OperatorController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function match()
    {
        $data['matchs'] = Match::all();
        return view('operator.match', $data);
    }

    public function teams()
    {
        $data['teams'] = User::where('type', 0)->get();
        return view('operator.team_index', $data);
    }

    public function match_detail($id)
    {
        $data['match'] = Match::find($id);
        $data['photos'] = Match::find($id)->photo;
        return view('operator.match_detail', $data);
    }

    public function team($id)
    {
        $data['team'] = User::find($id);
        $data['team_details'] = Team_Detail::where('fk_team_id', $id)->get();
        return view('operator.team', $data);
    }

    public function verify($id)
    {
        // return $id;
        $team_detail = Team_Detail::find($id);
        $team_detail->validation_status = 1;
        $team_detail->fk_operator_id = Auth::user()->id;
        $team_detail->save();

        return redirect()->back();
    }

    public function validation($id)
    {
        // return $id;
        $team = User::find($id);
        $team->registration_status = 1;
        $team->fk_operator_id = Auth::user()->id;
        $team->save();

        for ($i = 0; $i < 7; $i++) {
            Team_Detail::create([
                'game_id' => 'default',
                'account_name' => 'default',
                'full_name' => 'default',
                'identity_card' => 'noimage.jpg',
                'fk_team_id' => $id,
                'fk_operator_id' => 0,
                'validation_status' => 0
            ]);
        }

        return redirect()->back();
    }
}
