<h2>Negozi</h2>

@foreach ($stores as  $s)
    <ul>
        <li> <a href="/stores/{{$s->id}}">{{$s->name}}</a></li>
    </ul>
@endforeach

<a href="/"><button>torna indietro</button>
