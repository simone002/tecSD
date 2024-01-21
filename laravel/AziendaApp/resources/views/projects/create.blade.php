<form action="/projects" method="post">
    @csrf
   nome progetto: <input type="text" name="project_name" required>
   nome_dipendente: <input type="text" name="employee_name" required>
   <button>insert</button>
</form>

<br>

<a href="/"><button>torna alla home</button></a>
