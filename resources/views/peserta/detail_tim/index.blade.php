@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Detail Tim</div>

                <div class="card-body">
                    @if (session('message-success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message-success') }}
                    </div>
                    @endif

                    <table class="table" style="text-align:center">
                        <thead>
                            <th>#</th>
                            <th>ID ML</th>
                            <th>Nickname ML</th>
                            <th>Nama Pemain</th>
                            <th>Uploud pengena</th>
                            @if($team->registration_status == 1)
                            <th>Aksi</th>
                            @else
                            <th>Status</th>
                            @endif
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($team_details as $team_detail)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$team_detail->game_id}}</td>
                                <td>{{$team_detail->account_name}}</td>
                                <td>{{$team_detail->full_name}}</td>
                                <td><a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_{{$team_detail->id}}">Lihat</a></td>
                                @if($team->registration_status == 1)
                                <td><a href="{{ route('peserta.edit', $team_detail->id) }}" class="btn btn-sm btn-warning">Update</a></td>
                                @else
                                <td>
                                    @if($team_detail->validation_status)
                                    <h6><span class="badge badge-success">Sudah terverifikasi</span></h6>
                                    @else
                                    <h6><span class="badge badge-danger">Belum terverifikasi</span></h6>
                                    @endif
                                </td>
                                @endif
                            </tr>
                            <div class="modal fade" id="modal_{{$team_detail->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tanda Pengenal</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card" style="width: 18rem;">
                                                <?php $image = 'team_' . Auth::user()->id . '_' . $team_detail->identity_card ?>
                                                <img src="{{ asset('team_detail') }}/{{$image}}" class="card-img-top" alt="">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        </tbody>
                    </table>
                    @if($team->registration_status == 1)
                    <form action="{{ route('peserta.simpan_tim_permanen') }}" method="post">
                        @csrf
                        <input type="hidden" name="team_id" value="{{ $team->id }}">
                        <button class="btn btn-md btn-primary" onclick="return confirm('Are you sure?')">Simpan Permanen</button>
                    </form>
                    @else
                    <a href="{{route('home')}}" class="btn btn-md btn-primary">Kembali</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection