<h1>Create Games</h1>
<form action="/games" method="post">
    @csrf
    nome: <input type="text" name="name"> <br><br>
    giocatore: <input type="text" name="player_name"> <br><br>
    prezzo: <input type="text" name="prezzo"> <br><br>
    <input type="submit" value="Create Games">
</form>

<br>
<a href="/"><button>torna alla home</a>
