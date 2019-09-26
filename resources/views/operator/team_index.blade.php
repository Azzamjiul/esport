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
                        <td>{{$team->registration_status}}</td>
                        <td><a class="btn btn-outline-primary" href="{{route('team_detail', $team->id)}}">Detail</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
