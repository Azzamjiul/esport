@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('operator.generate')}}" method="post">
                @csrf
                <button class="btn btn-sm btn-success">Generate</button>
            </form>
            <table class="table table-striped" style="text-align:center;">
                <thead>
                    <tr>
                        <th>Ronde</th>
                        <th>Pertandingan</th>
                        <th>Score</th>
                        <th>Aksi</th>
                        <th>Pemenang</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($result) > 0)
                        @for($i = 0; $i < count($result); $i++)
                            @for($j = 0; $j < count($result[$i]); $j++)
                            <tr>
                                <td>{{$result[$i][$j][0]['round']}}</td>
                                <td>
                                    {{$result[$i][$j][0]['name']}}
                                    <br>
                                    @if(isset($result[$i][$j][1]))
                                    VS <br>
                                    {{$result[$i][$j][1]['name']}}
                                    <br><br>
                                    @endif
                                </td>
                                <td>
                                    {{$result[$i][$j][0]['score']}}
                                    
                                    @if(isset($result[$i][$j][1]))
                                    VS
                                    {{$result[$i][$j][1]['score']}}
                                    <br><br>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-outline-primary" href="{{route('operator.match_detail', $result[$i][$j][0]['id'])}}">Detail Team 1</a>
                                    @if(isset($result[$i][$j][1]))
                                    <a class="btn btn-outline-primary" href="{{route('operator.match_detail', $result[$i][$j][0]['id'])}}">Detail Team 2</a>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{route('operator.win', $result[$i][$j][0]['id'])}}" method="post">
                                        @csrf
                                        <button class="btn btn-sm btn-success">Team 1 Menang</button>
                                    </form>
                                    @if(isset($result[$i][$j][1]))
                                    <form action="{{route('operator.win', $result[$i][$j][0]['id'])}}" method="post">
                                        @csrf
                                        <button class="btn btn-sm btn-success">Team 2 Menang</button>
                                    </form>
                                    @endif
                                </td>
                            @endfor       
                            </tr>
                        @endfor
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
