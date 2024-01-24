<h2> Negozio: {{$store->id}}</h2>

Nome: {{$store->name}}<br>
Sede: {{$store->city}}<br>

<h2>Prodotti</h2>
@if ($store->products->count())

    @foreach ($store->products as $p)
        <ul>
            <li><a href="/products/{{$p->id}}">{{$p->name}}</a></li>
        </ul>
    @endforeach

@endif

<form action="/stores/{{$store->id}}/edit" method="GET">
    <button>edita</button>
</form>


