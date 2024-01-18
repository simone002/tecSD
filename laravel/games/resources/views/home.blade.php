
<h1>Operazioni sui Giocatori</h1>

<form action="/players/create" method="get">
    <input type="submit" value="Crea il Giocatore"> <br><br>
</form>

<form action="/players" method="get">
    <input type="submit" value="Mostra tutti i Giocatori"> <br><br>
</form>

<form action="/players/help_show" method="post">
    <input type="submit" value="Cerca Giocatore in base al ID">
    @csrf
    <input type="number" name="id"><br><br>
</form>

<form action="/players" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Ellimina tutti i giocatori"> <br><br>
</form>

<h1>Operazioni sui giochi</h1>

<form action="/games/create" method="get">
    <input type="submit" value="Crea il gioco"> <br><br>
</form>

<form action="/games" method="get">
    <input type="submit" value="Mostra tutti i giochi"> <br><br>
</form>

<form action="/games/help_show" method="post">
    @csrf
    <input type="submit" value="Cerca in base al ID">
    <input type="number" name="id"> <br><br>
</form>

<form action="/games" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Ellimina tutti i giochi">
</form>
<br>
