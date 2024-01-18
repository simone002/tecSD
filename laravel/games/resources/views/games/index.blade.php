
<h1>Giochi</h1>
@foreach ($games as $game)
    <a href="/games/{{$game->id}}">{{$game->name}}</a>
@endforeach

<br><br>
<a href="/"><button>torna alla home</a>
