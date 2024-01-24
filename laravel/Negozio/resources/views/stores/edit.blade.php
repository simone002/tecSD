<form action="/stores/{{$store->id}}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="name" value="{{$store->name}}" required>
    <input type="text" name="city" value="{{$store->city}}" required>
    <button>aggiorna</button>
</form>

<form action="/stores/{{$store->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button>delete</button>
</form>
