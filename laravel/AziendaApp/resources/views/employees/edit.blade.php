<form action="/employees/{{$employee->id}}" method="post">
    @csrf
    @method('PATCH')
    nome: <input type="text" name="name" value="{{$employee->name}}" required>
    reparto: <input type="text" name="department" value="{{$employee->department}}" required>
    <input type="hidden" name="id" value="{{$employee->id}}">
   <button>update</button>
</form>

<form action="/employees/{{$employee->id}}" method="post">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id" value="{{$employee->id}}">
    <button>delete</button>
</form>
<br>

<a href="/"><button>torna alla home</button></a>
