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
                            <form action="{{ route('detail_tim.update', $team->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                                <div class="form-group">
                                    <label for="">ID MLBB</label>
                                    <input type="text" name="game_id" class="form-control" value="{{ $team->game_id }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Nick Name</label>
                                    <input type="text" name="account_name" class="form-control" value="{{ $team->account_name }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="full_name" class="form-control" value="{{ $team->account_name }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Tanda Pengenal</label> <br>
                                    <!-- <input type="file" name="identity_card" value="{{ $team->account_name }}"> -->
                                    <input type="text" name="identity_card" class="form-control" value="{{ $team->identity_card }}" required>
                                </div>

                                <button type="submit" class="btn btn-sm btn-success">Simpan Perubahan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection