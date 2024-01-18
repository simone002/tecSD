
<h1>Players</h1>
@foreach ($players as $player)
    <a href="/players/{{$player->id}}">{{$player->name}}</a>
@endforeach

<br><br>
<a href="/"><button>torna alla home</a>

