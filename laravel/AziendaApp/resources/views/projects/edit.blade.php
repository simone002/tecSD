<form action="/projects/{{$project->id}}" method="post">
    @csrf
    @method('PATCH')
    nome: <input type="text" name="project_name" value="{{$project->project_name}}" required>
    <input type="hidden" name="employee_id" value="{{$project->employee_id}}" required>
    <input type="hidden" name="id" value="{{$project->id}}">
   <button>update</button>
</form>

<form action="/projects/{{$project->id}}" method="post">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id" value="{{$project->id}}">
    <button>delete</button>
</form>
<br>

<a href="/"><button>torna alla home</button></a>
