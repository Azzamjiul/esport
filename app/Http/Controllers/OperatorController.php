<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\User;

class OperatorController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['matchs'] = Match::all();
        return view('operator.home', $data);
    }

    public function detail($id)
    {
        $data['match'] = Match::find($id);
        $data['photos'] = Match::find($id)->photo;
        return view('operator.detail', $data);
    }
}
