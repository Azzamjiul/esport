@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Update Detail Tim</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-md-offset-2 col-md-12">
                            <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="">ID MLBB</label>
                                    <input type="text" name="game_id" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Nick Name</label>
                                    <input type="text" name="account_name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Tanda Pengenal</label>
                                    <input type="file" name="tanda_pengenal" class="form-control">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection