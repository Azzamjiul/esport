@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Detail Tim</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table" style="text-align:center">
                        <thead>
                            <th>#</th>
                            <th>ID MLBB</th>
                            <th>Nick Name</th>
                            <th>Nama Lengkap</th>
                            <th>Tanda Pengenal</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($teams as $team)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$team->game_id}}</td>
                                <td>{{$team->account_name}}</td>
                                <td>Nama Lengkap</td>
                                <td><a class="btn btn-sm btn-success">Lihat</a></td>
                                <td><a href="{{ route('detail_tim.edit', $team->id) }}" class="btn btn-sm btn-warning">Update</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection