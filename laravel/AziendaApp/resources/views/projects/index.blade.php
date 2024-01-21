<h1> Progetti </h1>

    @foreach ($projects as $p )
        <ul>
            <li> <a href="/projects/{{$p->id}}"> {{$p->project_name}} </li>
        </ul>
    @endforeach

<a href="/"><button>torna alla home</button></a>
