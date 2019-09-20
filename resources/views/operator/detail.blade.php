@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Pertandingan</div>

                <div class="card-body">
                    <div>
                        <label>Pertandingan: </label>
                        <span>{{$match->team_id1->name}} vs {{$match->team_id2->name}}</span>
                    </div>
                    <div>
                        <label>Mulai: </label>
                        <span>{{$match->match_start}}</span>
                    </div>
                    <div>
                        <label>Selesai: </label>
                        <span>{{$match->match_end}}</span>
                    </div>
                    <div>
                        <label>Pemenang: </label>
                        <span>{{$match->win->name}}</span>
                    </div>
                    <div>
                        <label>Screenshot: </label><br>
                        @foreach($photos as $photo)
                        <span>{{$photo->name}}</span><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
