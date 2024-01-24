<h1>Inserisci Negozio</h1>

<form action="/stores" method="POST">
    @csrf
    nome: <input type="text" name="name" required> <br>
    città: <input type="text" name="city" required><br>
    <button>inserisci</button>
</form>
<br>
<a href="/"><button>torna indietro</button>
