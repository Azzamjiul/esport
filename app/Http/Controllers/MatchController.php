<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use Dotenv\Regex\Result;

class MatchController extends Controller
{
    public function index()
    {
        $result = [];
        $round_array = [];
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

        // $result = "wkwk";

        return dd($result);
        return view('match')->with('result', json_encode($result));
    }
}
