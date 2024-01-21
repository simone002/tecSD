
<h2> Impiegato: {{$employee->id}}</h2>

    Nome:{{$employee->name}}</a><br>
    Dipartimento: {{$employee->department}}<br>

    @if ($employee->projects->count())
        <h3>progetti </h3>

        @foreach ($employee->projects as $p )
                progetto: <a href="/projects/{{$p->id}}">{{$p->project_name}}</a>
        @endforeach

    @endif

    <form action="/employees/{{$employee->id}}/edit">
        <button>edita</button>
    </form>
<br>

<a href="/"><button>torna alla home</button></a>
