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
            $matches = Match::where('round', $j)->get();
            // $result[] = count($matches);
            if (count($matches) > 1) {
                if (count($matches) % 2 == 0) {
                    for ($i = 0; $i < count($matches); $i = $i + 2) {
                        $round_array[] =
                            // per round
                            [
                                [
                                    "name"  =>   $matches[$i]->name,
                                    "id"    =>   $matches[$i]->id_name,
                                    "seed"  =>   $matches[$i]->seed,
                                    "round" =>   $matches[$i]->round
                                ],
                                [
                                    "name"  =>   $matches[$i + 1]->name,
                                    "id"    =>   $matches[$i + 1]->id_name,
                                    "seed"  =>   $matches[$i + 1]->seed,
                                    "round" =>   $matches[$i + 1]->round
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
                                    "id"    =>   $matches[$i]->id_name,
                                    "seed"  =>   $matches[$i]->seed,
                                    "round" =>   $matches[$i]->round
                                ],
                                [
                                    "name"  =>   $matches[$i + 1]->name,
                                    "id"    =>   $matches[$i + 1]->id_name,
                                    "seed"  =>   $matches[$i + 1]->seed,
                                    "round" =>   $matches[$i + 1]->round
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
                                "id"    =>   $matches[$wk]->id_name,
                                "seed"  =>   $matches[$wk]->seed,
                                "round" =>   $matches[$wk]->round
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
                            "id"    =>   $matches[0]->id_name,
                            "seed"  =>   $matches[0]->seed,
                            "round" =>   $matches[0]->round
                        ]
                    ];
            }
            $result[] = $round_array;
            $round_array = [];
        }

        // $result = "wkwk";

        // return $result;
        return view('match')->with('result', json_encode($result));
    }
}
