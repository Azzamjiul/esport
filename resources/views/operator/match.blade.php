@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped" style="text-align:center;">
                <thead>
                    <tr>
                        <th>Pertandingan</th>
                        <th>Pemenang</th>
                        <th>Jadwal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($matchs as $match)
                    <tr>
                        <td>{{$match->team_id1->name}} vs {{$match->team_id2->name}}</td>
                        <td>{{$match->win->name}}</td>
                        <td>{{$match->match_start}} - {{$match->match_end}}</td>
                        <td><a class="btn btn-outline-primary" href="{{route('match_detail', $match->id)}}">Detail</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
