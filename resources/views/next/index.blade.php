<x-layout>
<h2>Next Page</h2>
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
</x-layout>
