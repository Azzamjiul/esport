<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bagan</title>
    <link rel="stylesheet" href="{{ asset('css/jquery.bracket.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.gracket.css') }}">
</head>

<body>
    <h1>Bagan {{ $bagan }}</h1>
    <div class="tournament"></div>
    <script src="{{asset('js/core/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.gracket.min.js')}}"></script>
    <script>
        var datahehe = {!! $result !!}
        console.log(datahehe)
        $(".tournament").gracket({
            src: datahehe
        })
    </script>
</body>

</html>