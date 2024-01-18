
<h1>Create Player</h1>
<form action="/players" method="post">
    @csrf
    nome: <input type="text" name="name"> <br><br>
    <input type="submit" value="Create Player">
</form>
<br>
<a href="/"><button>torna alla home</a>
