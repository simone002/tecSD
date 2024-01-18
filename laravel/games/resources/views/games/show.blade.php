@php
    use App\Models\Player;

    $player = Player::findOrFail($game->player_id);
@endphp

<h1>Gioco {{$game->id}}</h1>
<b>Nome:</b> {{$game->name}} <br>
<b>Prezzo:</b> {{$game->prezzo}}€ <br>
<b>Giocatore:</b> <a href="/players/{{$player->id}}">{{$player->name}}</a> <br><br>
<form action="/games/{{$game->id}}/edit" method="get">
    <input type="submit" value="Edit/Delete Game">
</form>

<form action="/games/maggiora" method="post">
    @csrf
    <input type="hidden" value="{{$game->id}}" name="id">
    <input type="hidden" value="{{$game->prezzo}}" name="prezzo">
    <input type="submit" value="Maggiora prezzo di 10">
</form>

<br>
<a href="/"><button>torna alla home</a>

