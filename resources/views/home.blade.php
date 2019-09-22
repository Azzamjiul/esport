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
            <p>Batas waktu konfirmasi pembayaran pada tanggal <span class="badge badge-danger">29 September 2019</span></p>
            @if($data->bukti_bayar == null)
            <a class="btn btn-primary btn-lg" href="#" role="button" data-toggle="modal" data-target="#exampleModal">Konfirmasi Sekarang</a>
            @else
            <h1><span class="badge badge-warning">Bukti transfer sudah diunggah tunggu validasi dari panitia</span></h1>
            <a class="btn btn-primary btn-lg" href="#" role="button" data-toggle="modal" data-target="#exampleModal">Perbarui bukti transfer</a>
            @endif
          </div>
          @elseif($data->registration_status == 1)
          <!-- <div class="jumbotron" style="background:#a29fa1 !important"> -->
          <div class="jumbotron">
            <h1 class="display-4">Halo, {{ Auth::user()->name }}!</h1>
            <p class="lead">Selamat pembayaran kamu sudah <span class="badge badge-success">Terkonfirmasi!</span> Segera lengkapi detail tim kamu ya.</p>
            <hr class="my-4">
            <p>Batas waktu melengkapi detail tim pada tanggal <span class="badge badge-danger">29 September 2019</span></p>
            <a class="btn btn-primary btn-lg" href="{{ route('peserta.index') }}" role="button">Lengkapi Sekarang</a>
          </div>
          @elseif($data->registration_status == 2)
          <div class="jumbotron">
            <h1 class="display-4">Halo, {{ Auth::user()->name }}!</h1>
            <p class="lead">Selamat kamu sudah melengkapi detail tim. Status kamu <span class="badge badge-warning">Tahap Validasi</span></p>
            <hr class="my-4">
            <!-- <h2>Status kamu <span class="badge badge-warning">Tahap Validasi</span></h2> -->
            <a class="btn btn-primary btn-lg" href="{{ route('peserta.index') }}" role="button">Cek status tim</a>
          </div>
          @elseif($data->registration_status == 3)
          <div class="jumbotron">
            <h1 class="display-4">Halo, {{ Auth::user()->name }}!</h1>
            <p class="lead">Selamat kamu sudah siap mengikuti perlombaan.</p> <h3>Status kamu <span class="badge badge-success">Siap Bertanding</span></h3>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('peserta.upload_bukti') }}" method="post" enctype="multipart/form-data">
          @csrf

          @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif

          <div class="form-group">
            <label for="">Pilih gambar</label>
            <input type="file" name="image">
            <p class="text-danger">{{ $errors->first('image') }}</p>
          </div>
          <div class="form-group">
            <button class="btn btn-danger btn-sm">Upload</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection