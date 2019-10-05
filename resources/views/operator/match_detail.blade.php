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
                                    <label for="">Screenshots</label><br>
                                        <a href="#" target="blank"><img width="150px" src="{{ url('/team_detail/'.$photo->foto1) }}"><a><br>
                                        <a href="#" target="blank"><img width="150px" src="{{ url('/team_detail/'.$photo->foto2) }}"><a><br>
                                        <a href="#" target="blank"><img width="150px" src="{{ url('/team_detail/'.$photo->foto3) }}"><a><br>
                                        <a href="#" target="blank"><img width="150px" src="{{ url('/team_detail/'.$photo->foto4) }}"><a><br>
                                        <a href="#" target="blank"><img width="150px" src="{{ url('/team_detail/'.$photo->foto5) }}"><a><br>
                                        <a href="#" target="blank"><img width="150px" src="{{ url('/team_detail/'.$photo->foto6) }}"><a>
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
