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
                            <th>ID MLBB</th>
                            <th>Nick Name</th>
                            <th>Nama Lengkap</th>
                            <th>Tanda Pengenal</th>
                            @if($team->registration_status == 1)
                            <th>Aksi</th>
                            @endif
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($team_details as $team_detail)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$team_detail->game_id}}</td>
                                <td>{{$team_detail->account_name}}</td>
                                <td>Nama Lengkap</td>
                                <td><a class="btn btn-sm btn-success">Lihat</a></td>
                                @if($team->registration_status == 1)
                                <td><a href="{{ route('detail_tim.edit', $team_detail->id) }}" class="btn btn-sm btn-warning">Update</a></td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <form action="{{ route('detail_tim.simpan_permanen') }}" method="post">
                        @csrf
                        <input type="hidden" name="team_id" value="{{ $team_details[0]->fk_team_id }}">
                        <button class="btn btn-md btn-primary" onclick="return confirm('Are you sure?')">Simpan Permanen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection