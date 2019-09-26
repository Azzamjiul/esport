<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/jquery.bracket.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.gracket.css') }}">
</head>

<body>
    <!-- <div class="tournament"></div> -->
    <div class="tournament"></div>
    <div class="tournament_1"></div>
    <script src="{{asset('js/core/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.gracket.min.js')}}"></script>
    <script>
        myData = [
            // round 1
            [
                // match 1
                [{
                    "name": "Erik Zettersten",
                    "id": "erik-zettersten",
                    "seed": 1,
                    "displaySeed": "D1",
                    "score": 47
                }, {
                    "name": "Andrew Miller",
                    "id": "andrew-miller",
                    "seed": 2
                }],
                // match 2
                [{
                    "name": "James Coutry",
                    "id": "james-coutry",
                    "seed": 3
                }, {
                    "name": "Sam Merrill",
                    "id": "sam-merrill",
                    "seed": 4
                }],
            ],
            [
                [{
                    "name": "Erik Zettersten",
                    "id": "erik-zettersten",
                    "seed": 1
                }, {
                    "name": "James Coutry",
                    "id": "james-coutry",
                    "seed": 3
                }],
            ]
        ];

        datahehe = [[[{"name":"Azzam Jihad Ulhaq","id":"azzam","seed":1,"round":1},{"name":"budi","id":"budi","seed":2,"round":1}],[{"name":"cika","id":"cika","seed":3,"round":1},{"name":"doni","id":"doni","seed":4,"round":1}]],[[{"name":"Azzam Jihad Ulhaq","id":"azzam","seed":1,"round":1},{"name":"budi","id":"budi","seed":2,"round":1}],[{"name":"cika","id":"cika","seed":3,"round":1},{"name":"doni","id":"doni","seed":4,"round":1}],[{"name":"Azzam","id":"azzam","seed":1,"round":2},{"name":"doni","id":"doni","seed":4,"round":2}]]];

        $(".tournament").gracket({
            src: myData
        });

        $(".tournament_1").gracket({
            src: datahehe
        });
    </script>
</body>

</html>