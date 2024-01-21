<h1> Inserisci Autore </h1>
<form action="/authors" method="post">
    @csrf
    Nome:<input type="text" name="nome" required>
    anno di nascita:<input type="text" name="b_date" required>
    paese:<input type="text" name="country" required>
    <input type="submit" name="inserisci">
</form>

<br><br>
<a href="/"><button>torna alla home</button></a>
