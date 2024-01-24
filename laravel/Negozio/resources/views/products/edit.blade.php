<form action="/products/{{$product->id}}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="name" value="{{$product->name}}" required>
    <input type="text" name="price" value="{{$product->price}}" required>
    <input type="text" name="quantity" value="{{$product->quantity}}" required>
    <input type="hidden" name="store_id" value="{{$product->store_id}}" required>
    <button>aggiorna</button>
</form>

<form action="/products/{{$product->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button>delete</button>
</form>
