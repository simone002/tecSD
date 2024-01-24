<h2>Prodotti</h2>

@foreach ($products as  $p)
    <ul>
        <li> <a href="/products/{{$p->id}}">{{$p->name}}</a></li>
    </ul>
@endforeach

<a href="/"><button>torna indietro</button>
