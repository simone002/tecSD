<h1> LIBRI </h1>

@foreach ($books as $book )
    <a href="/books/{{$book->id}}">{{$book->titolo}}</a>
@endforeach

<br><br>
<a href="/"><button>torna alla home</button></a>
