<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body class="">
Next Page
@if($greeting == "hello")
    <p>{{$greeting}}</p>
@endif
<ul>
    @foreach($persons as $person)
    <li>
        {{$person["name"]}}
        <a href="/next/{{$person["id"]}}">view data</a>
    </li>
    @endforeach
</ul>
</body>
</html>
