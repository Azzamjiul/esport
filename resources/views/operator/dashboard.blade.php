@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="card-deck">

                <!-- Card 1 -->
                <div class="card">
                <div class="card-header">Jumlah Pendaftar: </div>
                <div class="card-body">
                <p class="card-text">{{$daftar}}.</p>
                </div>
                </div>

                <!-- Card 2 -->
                <div class="card">
                <div class="card-header">Telah Upload Bukti Bayar Dan Belum Terkonfirmasi: </div>
                <div class="card-body">
                <p class="card-text">{{$belumconfirm}}.</p>
                </div>
                </div>

                <!-- Card 3 -->
                <div class="card">
                <div class="card-header">Telah Upload Bukti Bayar Dan Terkonfirmasi: </div>
                <div class="card-body">
                <p class="card-text">{{$sudahconfirm}}.</p>
                </div>
                </div>

                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
