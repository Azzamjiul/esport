@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('operator.generate_internal')}}" method="post">
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
                                @if(isset($result[$i][$j][1]))
                                @if($result[$i][$j][0]['score'] != 0 || $result[$i][$j][1]['score'] != 0)
                                    @if($result[$i][$j][0]['score'] == 1)
                                        {{$result[$i][$j][0]['name']}}
                                    @elseif($result[$i][$j][1]['score'] == 1)
                                        {{$result[$i][$j][1]['name']}}
                                    @endif
                                @else
                                <form action="{{route('operator.win')}}" method="post">
                                    @csrf
                                    <select name="winner_id" class="form-control" id="select">
                                        <option value="{{$result[$i][$j][0]['id']}}">{{$result[$i][$j][0]['name']}}</option>
                                        @if(isset($result[$i][$j][1]))
                                        <option value="{{$result[$i][$j][1]['id']}}">{{$result[$i][$j][1]['name']}}</option>
                                        @endif
                                    </select>
                                        <button class="btn btn-sm btn-success">Menang</button>
                                    </form>
                                @endif
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
