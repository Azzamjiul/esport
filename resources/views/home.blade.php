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
          @if ($errors->any())
          <div class="alert alert-danger" role="alert">
            {{ implode('', $errors->all(':message')) }}
          </div>
          @endif

          @if(Auth::user()->type == 0)
            @if($data->registration_status == 0)
            <div class="jumbotron">
              <h1>Halo, {{ Auth::user()->name }}!</h1>
              <p class="lead">Selamat tim kamu sudah terdaftar! Namun, masih belum bisa mengikuti pertandingan nih. Agar bisa ikut pertandingan, segera konfirmasi pembayaran kamu ya :)</p>
              <hr class="my-4">
              <h1>Biaya Pendaftaran <span class="badge badge-warning">Rp.{{ number_format(Auth::user()->invoice) }}</span></h1>
              <span class="btn btn-warning btn-lg">Transfer ke Rekening Britama Bisnis 1248-01-000012-56-3 a.n. Panitia E-sport</span>
              <br><br>
              <!-- <p>Batas waktu konfirmasi pembayaran pada tanggal <span class="badge badge-danger">16 Oktober 2019 Pukul 23.59 WIB</span></p> -->
              <a class="btn btn-primary btn-lg" href="#" role="button" data-toggle="modal" data-target="#exampleModal">Konfirmasi Sekarang</a>
            </div>
            @elseif($data->registration_status == -1)
            <div class="jumbotron">
              <h1>Halo, {{ Auth::user()->name }}!</h1>
              <p class="lead">Akun kamu masih belum bisa bertanding, <span class="badge badge-danger">dikarenakan ada anggota kamu yang ikut lebih dari 3 tim.</p>
              <hr class="my-4">
              <h1>Anggota yang melanggar</h1>
              @foreach($team_detail as $t)
              <h3></h3><br>
              <span class="btn btn-danger btn-lg">{{$t->full_name}}</span>
              @endforeach
              <p>Silahkan perbarui team anda lagi</p>
              <a class="btn btn-primary btn-lg" href="{{ route('peserta.index') }}" role="button">Perbarui Sekarang</a>
            </div>
            @elseif($data->registration_status == 1)
            <div class="jumbotron">
              <h1>Halo, {{ Auth::user()->name }}!</h1>
              <p class="lead">Selamat tim kamu sudah terdaftar! Namun, masih belum bisa mengikuti pertandingan nih. Agar bisa ikut pertandingan, segera konfirmasi pembayaran kamu ya :)</p>
              <hr class="my-4">
              <h1>Biaya Pendaftaran <span class="badge badge-warning">Rp.{{ number_format(Auth::user()->invoice) }}</span></h1>
              <span class="btn btn-warning btn-lg">Transfer ke Rekening Britama Bisnis 1248-01-000012-56-3 a.n. Panitia E-sport</span>
              <br><br>
              <h1><span class="badge badge-warning">Bukti transfer sudah diunggah tunggu validasi dari panitia</span></h1>
            </div>
            @elseif($data->registration_status == 2)
            <!-- <div class="jumbotron" style="background:#a29fa1 !important"> -->
            <div class="jumbotron">
              <h1 class="display-4">Halo, {{ Auth::user()->name }}!</h1>
              <p class="lead">Selamat pembayaran kamu sudah <span class="badge badge-success">Terkonfirmasi!</span> Segera lengkapi detail tim kamu ya.</p>
              <hr class="my-4">
              <p>Batas waktu melengkapi detail tim pada tanggal <span class="badge badge-danger">17 Oktober 2019 Pukul 23.59 WIB</span></p>
              <a class="btn btn-primary btn-lg" href="{{ route('peserta.index') }}" role="button">Lengkapi Sekarang</a>
            </div>
            @elseif($data->registration_status == 3)
            <div class="jumbotron">
              <h1 class="display-4">Halo, {{ Auth::user()->name }}!</h1>
              <p class="lead">Selamat kamu sudah melengkapi detail tim. Status kamu <span class="badge badge-warning">Tahap Validasi</span></p>
              <hr class="my-4">
              <!-- <h2>Status kamu <span class="badge badge-warning">Tahap Validasi</span></h2> -->
              <a class="btn btn-primary btn-lg" href="{{ route('peserta.index') }}" role="button">Cek status tim</a>
            </div>
            @elseif($data->registration_status == 4)
            <div class="jumbotron">
              <h1 class="display-4">Halo, {{ Auth::user()->name }}!</h1>
              <p class="lead">Selamat kamu sudah siap mengikuti perlombaan.</p>
              <h3>Status kamu <span class="badge badge-success">Siap Bertanding</span></h3>
            </div>
            @endif
          @else
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
      <form action="{{ route('peserta.upload_bukti') }}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="modal-body">
            <div class="form-group">
              <label for="">Pilih gambar (Maksimal 1 MB)</label> <br>
              <input type="file" name="image">
              <p class="text-danger">{{ $errors->first('image') }}</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Upload</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
      </form>
    </div>
  </div>
</div>
@endsection