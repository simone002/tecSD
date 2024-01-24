<h2> Prodotto: {{$product->id}}</h2>

Nome: {{$product->name}}<br>
prezzo: {{$product->price}}<br>
quantità: {{$product->quantity}}<br>
Negozio: <a href="/stores/{{$product->store->id}}">{{$product->store->name}}<br>

<form action="/products/compra" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$product->id}}">
    <button>compra</button>
</form>

<form action="/products/{{$product->id}}/edit" method="GET">
    <button>edita</button>
</form>

