<?php

namespace App\Http\Controllers;

use App\User;
use App\Team_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailTimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = User::where('id', Auth::user()->id)->first();
        if($team->registration_status == 1){
            $team_details = Team_Detail::where('fk_team_id', Auth::user()->id)->get();
            return view('peserta.detail_tim.index', compact('team','team_details'));
        }else{
            return redirect()->route('home')->with('message-error', 'Anda harus melakukan konfirmasi pembayaran terlebih dahulu');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team =  Team_Detail::where('id', $id)->first();
        // return $team;
        return view('peserta.detail_tim.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        Team_Detail::where('id', $id)->update([
            'game_id' => $request->game_id,
            'account_name' => $request->account_name,
            'full_name' => $request->full_name,
            'identity_card' => $request->identity_card
        ]);

        return redirect()->route('detail_tim.index')->with('message-success','Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function simpan_permanen(Request $request){
        $team = User::where('id', $request->team_id)->first();
        User::where('id', $request->team_id)->update([
            'registration_status' => $team->registration_status+1
        ]);
        return redirect()->route('home')->with('message-success','Data berhasil diperbaharui');
    }
}