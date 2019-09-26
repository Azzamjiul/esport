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
            // $result[] = $matches;
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
            $result[] = $round_array;
        }

        // $result[] = [
        //     "name"  =>   $match->name,
        //     "id"    =>   $match->id_name,
        //     "seed"  =>   $match->seed,
        // ];

        return $result;
    }
}
