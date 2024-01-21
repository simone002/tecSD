<h1>Edit/Delete Books</h1>
<form action="/books/{{$book->id}}" method="post">
    @csrf
    @method('PATCH')
    titolo:<input type="text" name="titolo" value="{{$book->titolo}}">
    anno:<input type="text" name="anno" value="{{$book->anno}}">
    prezzo:<input type="number" name="prezzo" value="{{$book->prezzo}}">
    <input type="hidden" name="author_id" value="{{$book->author_id}}">
    <input type="submit" value="aggiorna">
</form>

<form action="/books/{{$book->id}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="ellimina">
</form>
