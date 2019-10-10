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
                                    <a class="btn btn-outline-primary" href="{{route('operator.match_detail', $result[$i][$j][0]['id'])}}">Detail Team 1</a>
                                    @if(isset($result[$i][$j][1]))
                                    <a class="btn btn-outline-primary" href="{{route('operator.match_detail', $result[$i][$j][1]['id'])}}">Detail Team 2</a>
                                    @endif
                                </td>
                                <td>
                                <form action="{{route('operator.win')}}" method="post">
                                    @csrf
                                    <select class="form-control" id="select">
                                        <option value="{{$result[$i][$j][0]['id']}}">Team 1</option>
                                        @if(isset($result[$i][$j][1]))
                                        <option value="{{$result[$i][$j][1]['id']}}">Team 2</option>
                                        @endif
                                    </select>
                                        <button class="btn btn-sm btn-success">Menang</button>
                                    </form>
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
