<h1>Edit/Delete Author</h1>
<form action="/authors/{{$author->id}}" method="post">
    @csrf
    @method('PATCH')
    nome:<input type="text" name="nome" value="{{$author->nome}}">
    anno di nascita:<input type="text" name="b_date" value="{{$author->b_date}}">
    country:<input type="text" name="prezzo" value="{{$author->country}}">
    <input type="submit" value="aggiorna">
</form>

<form action="/authors/{{$author->id}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="ellimina">
</form>
