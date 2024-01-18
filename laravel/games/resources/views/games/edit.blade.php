<h1>Edit/Delete Task</h1>
<form action="/games/{{$game->id}}" method="post">
    @csrf
    @method('PATCH')

    nome: <input type="text" name="name" value="{{$game->name}}"> <br><br>
    prezzo: <input type="text" name="prezzo" value="{{$game->prezzo}}"> <br><br>
    player_id: <input type="number" name="player_id" value="{{$game->player_id}}"> <br><br>
    <input type="submit" value="Save Game"> <br><br>
</form>
<form action="/games/{{$game->id}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete Game">
</form>

<br>
<a href="/"><button>torna alla home</a>
