@php
    use App\Models\Employee;

    $employee= Employee::findOrFail($project->employee_id);
@endphp


<h2> progetto: {{$project->id}}</h2>

    nome progetto: {{$project->project_name}}<br>
    dipendente: <a href="/employees/{{$employee->id}}"> {{$employee->name}}</a>

<form action="/projects/{{$project->id}}/edit">
    <button>edita</button>
</form>

<a href="/"><button>torna alla home</button></a>
