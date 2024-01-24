<form action="/products" method="POST">
   @csrf
   nome: <input type="text" name="name" required> <br>
   prezzo: <input type="text" name="price" required><br>
   quantità: <input type="text" name="quantity" required><br>
   id del negozio: <input type="text" name="store_id" required><br>
   <button>inserisci</button>
</form>
<br>
<a href="/"><button>torna indietro</button>
