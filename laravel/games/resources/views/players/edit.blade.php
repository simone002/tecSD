<h1>Edit/Delete Project</h1>
<form action="/players/{{$player->id}}" method="post">
    @csrf
    @method('PATCH')

    Nome: <input type="text" name="name" value="{{$player->name}}"> <br><br>
    <input type="submit" value="Save Player"> <br><br>
</form>
<form action="/players/{{$player->id}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete Player">
</form>
<br>
<a href="/"><button>torna alla home</a>
