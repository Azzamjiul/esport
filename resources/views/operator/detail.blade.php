@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Detail Pertandingan</div>

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
                                    <label for="">Pertandingan</label>
                                    <span>{{$match->team_id1->name}} vs {{$match->team_id2->name}}</span>
                                </div>

                                <div class="form-group">
                                    <label for="">Jadwal Mulai</label>
                                    <input type="text" class="js-datepicker form-control" id="match_start" name="match_start" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                </div>

                                <div class="form-group">
                                    <label for="">Jadwal Selesai</label>
                                    <input type="text" class="js-datepicker form-control" id="match_end" name="match_end" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                </div>

                                <div class="form-group">
                                    <label for="">Pemenang</label>
                                    <select class="js-select2 form-control" id="winner" name="winner" style="width: 100%;" data-placeholder="Pilih Pemenang" tabindex="-1" aria-hidden="true">
                                            <option></option>
                                            <option value="{{$match->team_id1->id}}">{{$match->team_id1->name}}</option>
                                            <option value="{{$match->team_id2->id}}">{{$match->team_id2->name}}</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Screenshots</label>
                                    @foreach($photos as $photo)
                                        <a href="#" target="blank"><img width="150px" src="{{ url('/screenshots/'.$photo->name) }}"><a>
                                    @endforeach
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
