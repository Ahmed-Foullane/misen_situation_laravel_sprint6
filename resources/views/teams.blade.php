<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($teams as $team)
    <p>team name:  {{$team["name"]}}</p>
    <p>team city: {{$team["city"]}}</p>
    <p>team country: {{$team["country"]}}</p>
    <p>team date: {{$team["date"]}}</p>
    <a href="{{url('/team/delet/'.$team["id"])}}" >delet</a>
    <hr>
    @endforeach
</body>
</html>