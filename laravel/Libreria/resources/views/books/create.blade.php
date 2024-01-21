<h1> Inserisci libro </h1>
<form action="/books" method="post">
    @csrf
    titolo:<input type="text" name="titolo" required>
    anno:<input type="text" name="anno" required>
    prezzo: <input type="text" name="prezzo" required>
    autore: <input type="text" name="author_name" required>
    <input type="submit" name="inserisci">
</form>

<br><br>
<a href="/"><button>torna alla home</button></a>
