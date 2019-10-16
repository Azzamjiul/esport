@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped" style="text-align:center;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No WA</th>
                        <th>Status Registrasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach($teams as $team)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$team->name}}</td>
                        <td>{{$team->email}}</td>
                        <td>{{$team->telp}}</td>
                        <td>
                            @if($team->registration_status == 0)
                            <p class="badge badge-danger">Belum Konfirmasi Pembayaran</p>
                            @elseif($team->registration_status == 1)
                            <p class="badge badge-warning">Sudah upload bukti pembayaran</p>
                            @elseif($team->registration_status == 2)
                            <p class="badge badge-warning">Belum Mengisi Detail Tim</p>
                            @elseif($team->registration_status == 3)
                            <p class="badge badge-info">Belum Konfirmasi Detail Tim</p>
                            @elseif($team->registration_status == 4)
                            <p class="badge badge-success">Siap Bertanding</p>
                            @endif
                        </td>
                        <td><a class="btn btn-outline-primary" href="{{route('operator.team_detail', $team->id)}}">Detail</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection