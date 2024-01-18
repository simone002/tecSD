
<h1>Giocatore {{$player->id}}</h1>
<b>Nome:</b> {{$player->name}} <br>
@if ($player->games->count())
    <b>Giochi:</b>
    <ul>
        @foreach ($player->games as $game)
            <li> <a href="/games/{{$game->id}}">{{$game->name}}</a> </li>
        @endforeach
    </ul>
@endif
<br>
<form action="/players/{{$player->id}}/edit" method="get">
    <input type="submit" value="Edit/Delete Player"> <br><br>
</form> <br>

<a href="/"><button>torna alla home</a>


