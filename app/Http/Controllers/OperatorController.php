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
        // $data['matchs'] = Match::all();
        $result = [];
        $round_array = [];
        if($jml = Match::all()->count()){
            $i = 0;
            $rounds = Match::orderBy('id', 'DESC')->first()->round;
            // return $rounds;
            $round = 1;
            for ($j = $round; $j <= $rounds; $j = $j + 1) {
                $matches = Match::where('round', $j)->orderBy('seed', 'ASC')->get();
                // $result[] = count($matches);
                if (count($matches) > 1) {
                    if (count($matches) % 2 == 0) {
                        for ($i = 0; $i < count($matches); $i = $i + 2) {
                            $round_array[] =
                                // per round
                                [
                                    [
                                        "name"  =>   $matches[$i]->name,
                                        "id"    =>   $matches[$i]->id,
                                        "seed"  =>   $matches[$i]->seed,
                                        "round" =>   $matches[$i]->round,
                                        "score" =>   $matches[$i]->score
                                    ],
                                    [
                                        "name"  =>   $matches[$i + 1]->name,
                                        "id"    =>   $matches[$i + 1]->id,
                                        "seed"  =>   $matches[$i + 1]->seed,
                                        "round" =>   $matches[$i + 1]->round,
                                        "score" =>   $matches[$i + 1]->score
                                    ],
                                ];
                        }
                    } else {
                        $wk = 0;
                        for ($i = 0; $i < count($matches)-1; $i = $i + 2) {
                            $round_array[] =
                                // per round
                                [
                                    [
                                        "name"  =>   $matches[$i]->name,
                                        "id"    =>   $matches[$i]->id,
                                        "seed"  =>   $matches[$i]->seed,
                                        "round" =>   $matches[$i]->round,
                                        "score" =>   $matches[$i]->score
                                    ],
                                    [
                                        "name"  =>   $matches[$i + 1]->name,
                                        "id"    =>   $matches[$i + 1]->id,
                                        "seed"  =>   $matches[$i + 1]->seed,
                                        "round" =>   $matches[$i + 1]->round,
                                        "score" =>   $matches[$i + 1]->score
                                    ],
                                ];
                                
                            $wk = $wk+2;
                        }
                        // return $round_array;
                        $round_array[] =
                            // per round
                            [
                                [
                                    "name"  =>   $matches[$wk]->name,
                                    "id"    =>   $matches[$wk]->id,
                                    "seed"  =>   $matches[$wk]->seed,
                                    "round" =>   $matches[$wk]->round,
                                    "score" =>   $matches[$wk]->score
                                ]
                            ];
                        // return $round_array;
                    }
                } else {
                    $round_array[] =
                        // per round
                        [
                            [
                                "name"  =>   $matches[0]->name,
                                "id"    =>   $matches[0]->id,
                                "seed"  =>   $matches[0]->seed,
                                "round" =>   $matches[0]->round,
                                "score" =>   $matches[0]->score
                            ]
                        ];
                }
                $result[] = $round_array;
                $round_array = [];
            }
        }
        
        // return dd($result);
        // return dd($result[0][0][0]);
        return view('operator.match', compact('result'));
    }

    public function match_detail($id)
    {
        $photo = Match::find($id);
        // dd($photo);
        return view('operator.match_detail', compact('photo'));
    }



    public function teams()
    {
        $data['teams'] = User::where('type', 0)->get();
        return view('operator.team_index', $data);
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

    public function verifikasi_tim($id)
    {
        // return "wkwk";
        $team = User::find($id);
        $team->update([
            'registration_status' => 3
        ]);
        $team->save();
        return redirect()->route('operator.teams');
    }

    public function generate(){
        $teams = User::inRandomOrder()->where('registration_status', '=', '3')->where('type', '=', '0')->where('status', '=', '0')->get();
        $match = Match::all();
        $sum = count($match);
        if(count($teams) > 0)
            for($i = 0; $i < count($teams); $i++){
                Match::create([
                    'id_name' => $teams[$i]->id,
                    'name' => $teams[$i]->name,
                    'seed' => $sum = $sum + 1,
                    'round' => 1,
                    'score' => 0,
                    'foto1' => 'noimage.jpg',
                    'foto2' => 'noimage.jpg',
                    'foto3' => 'noimage.jpg',
                    'foto4' => 'noimage.jpg',
                    'foto5' => 'noimage.jpg',
                    'foto6' => 'noimage.jpg',
                    'fk_operator_id' => 0,
                ]);
                $teams[$i]->update([
                    'status' => 1,
                ]);
            }
        // return dd($teams);
        return redirect()->back();
    }
    
    public function win(Request $request){
        // return $request;
        $team = Match::find($request->winner_id);
        $team->update([
            'score' => 1,
        ]);
        Match::create([
            'id_name' => $team->id,
                'name' => $team->name,
                'seed' => $team->seed,
                'round' => $team->round + 1,
                'score' => 0,
                'foto1' => 'noimage.jpg',
                'foto2' => 'noimage.jpg',
                'foto3' => 'noimage.jpg',
                'foto4' => 'noimage.jpg',
                'foto5' => 'noimage.jpg',
                'foto6' => 'noimage.jpg',
                'fk_operator_id' => Auth::user()->id,
        ]);
        return redirect()->back();
    }
}
