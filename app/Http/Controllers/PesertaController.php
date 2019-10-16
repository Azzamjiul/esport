<?php

namespace App\Http\Controllers;

use App\User;
use App\Team_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesertaController extends Controller
{

    public $path;
    public $dimensions;

    public function __construct()
    {
        $this->path_bukti_bayar = public_path('bukti_bayar');
        $this->path_team_detail = public_path('team_detail');
        $this->dimension = '500';
    }

    public function index()
    {
        $team = User::where('id', Auth::user()->id)->first();
        if ($team->registration_status == 0) {
            return redirect()->route('home')->with('message-error', 'Kamu harus melakukan konfirmasi pembayaran terlebih dahulu');
        } else if ($team->registration_status < 4) {
            $team_details = Team_Detail::where('fk_team_id', Auth::user()->id)->get();
            return view('peserta.detail_tim.index', compact('team', 'team_details'));
        } else {
            return redirect()->route('home')->with('message-success', 'tim kamu sudah siap bertanding');
        }
    }

    public function edit($id)
    {
        $team =  Team_Detail::where('id', $id)->first();
        return view('peserta.detail_tim.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team_detail = Team_Detail::where('id', $id);

        if ($team_detail->first()->identity_id == 'noimage.jpg') {
            $this->validate($request, [
                'identity_card' => 'required'
            ]);
        } else {
            $this->validate($request, [
                'identity_card' => ''
            ]);
        }

        $file = $request->file('identity_card');
        $ext = $file->getClientOriginalExtension();
        $fileName = 'member_' . $id . '.' .$ext;
        $tujuan_upload = $this->path_team_detail . '/team_' . Auth::user()->id;

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
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $fileName = 'team_' . Auth::user()->id . '.' .$ext;
        $tujuan_upload = $this->path_bukti_bayar;
        $file->move($tujuan_upload,$fileName);
        User::where('id', Auth::user()->id)->update([
            'bukti_bayar' => $fileName,
            'registration_status' => 1
        ]);
     
        return redirect()->route('home')->with('message-success', 'Bukti pembayaran berhasil diunggah');
    }
}
