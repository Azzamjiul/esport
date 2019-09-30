<?php

namespace App\Http\Controllers;

use App\User;
use App\Team_Detail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
use Image;

class PesertaController extends Controller
{

    public $path;
    public $dimensions;

    public function __construct()
    {
        // definisikan path
        $this->path_bukti_bayar = public_path('bukti_bayar');
        $this->path_team_detail = public_path('team_detail');
        // definiska dimensi
        // $this->dimensions = ['245'];
        $this->dimension = '500';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = User::where('id', Auth::user()->id)->first();
        if ($team->registration_status == 0) {
            return redirect()->route('home')->with('message-error', 'Kamu harus melakukan konfirmasi pembayaran terlebih dahulu');
        } else if ($team->registration_status < 3) {
            $team_details = Team_Detail::where('fk_team_id', Auth::user()->id)->get();
            return view('peserta.detail_tim.index', compact('team', 'team_details'));
        } else {
            return redirect()->route('home')->with('message-success', 'tim kamu sudah siap bertanding');
        }
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
    // update tim detail
    public function update(Request $request, $id)
    {
        $team_detail = Team_Detail::where('id', $id);
        // return $team_detail->first();

        if ($team_detail->first()->identity_id == 'noimage.jpg') {
            $this->validate($request, [
                'identity_card' => 'required'
            ]);
        } else {
            $this->validate($request, [
                'identity_card' => ''
            ]);
        }

        // return $request->file('identity_card');

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('identity_card');
        $ext = $file->getClientOriginalExtension();
        $fileName = 'member_' . $id . '.' .$ext;
        // return $fileName;

        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = $this->path_team_detail . '/team_' . Auth::user()->id;
        // return $tujuan_upload;

        $file->move($tujuan_upload,$fileName);

        if ($team_detail->first()->identity_id == 'noimage.jpg') {
            $team_detail->update([
                'game_id' => $request->game_id,
                'account_name' => $request->account_name,
                'full_name' => $request->full_name,
            ]);
        } else {
            $team_detail->update([
                'game_id' => $request->game_id,
                'account_name' => $request->account_name,
                'full_name' => $request->full_name,
                'identity_card' => $fileName
            ]);
        }

        return redirect()->route('peserta.index')->with('message-success', 'Data berhasil diperbaharui');
    }

    public function simpan_tim_permanen(Request $request)
    {
        $team = User::where('id', $request->team_id)->first();
        User::where('id', $request->team_id)->update([
            'registration_status' => $team->registration_status + 1
        ]);
        return redirect()->route('peserta.index')->with('message-success', 'Data berhasil disimpan permanen');
    }

    public function upload_bukti(Request $request)
    {
        $this->validate($request, [
            'image' => 'required'
        ]);
            
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('image');
        // return $file;
        $ext = $file->getClientOriginalExtension();
        $fileName = 'team_' . Auth::user()->id . '.' .$ext;

        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = $this->path_bukti_bayar;
        // return $tujuan_upload;

        $file->move($tujuan_upload,$fileName);
            
        User::where('id', Auth::user()->id)->update([
            'bukti_bayar' => $fileName
        ]);
     
        return redirect()->route('home')->with('message-success', 'Bukti pembayaran berhasil diunggah');
    }
}
