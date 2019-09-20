@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('message-success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message-success') }}
                    </div>
                    @elseif (session('message-error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('message-error') }}
                    </div>
                    @endif

                    @if($data->registration_status == 0)
                    <div class="jumbotron">
                        <h1 class="display-4">Halo, {{ Auth::user()->name }}!</h1>
                        <p class="lead">Selamat tim kamu sudah terdaftar! Namun, masih belum bisa mengikuti pertandingan nih. Agar bisa ikut pertandingan, segera konfirmasi pembayaran kamu ya :)</p>
                        <hr class="my-4">
                        <p>Batas waktu konfirmasi pembayaran pada tanggal <span class="badge badge-danger">29 September 2019</span></h1></p>
                        <a class="btn btn-primary btn-lg" href="#" role="button">Konfirmasi Sekarang</a>
                    </div>
                    @elseif($data->registration_status == 1)
                        <!-- <div class="jumbotron" style="background:#a29fa1 !important"> -->
                        <div class="jumbotron">
                            <h1 class="display-4">Halo, {{ Auth::user()->name }}!</h1>
                            <p class="lead">Selamat pembayaran kamu sudah <span class="badge badge-success">Terkonfirmasi!</span> Segera lengkapi detail tim kamu ya.</p>
                            <hr class="my-4">
                            <p>Batas waktu melengkapi detail tim pada tanggal <span class="badge badge-danger">29 September 2019</span></p>
                            <a class="btn btn-primary btn-lg" href="{{ route('detail_tim.index') }}" role="button">Lengkapi Sekarang</a>
                        </div>
                    @elseif($data->registration_status == 2)
                        <div class="jumbotron">
                            <h1 class="display-4">Halo, {{ Auth::user()->name }}!</h1>
                            <p class="lead">Selamat kamu sudah melengkapi detail tim. Status kamu <span class="badge badge-warning">Tahap Validasi</span></p>
                            <hr class="my-4">
                            <!-- <h2>Status kamu <span class="badge badge-warning">Tahap Validasi</span></h2> -->
                            <a class="btn btn-primary btn-lg" href="{{ route('detail_tim.index') }}" role="button">Cek status tim</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection