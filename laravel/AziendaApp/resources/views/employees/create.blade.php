<form action="/employees" method="post">
    @csrf
   nome: <input type="text" name="name" required>
   reparto: <input type="text" name="department" required>
   <button>insert</button>
</form>

<br>

<a href="/"><button>torna alla home</button></a>
