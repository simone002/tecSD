<h1> Autore: {{$author->id}} </h1>

<p> nome: {{$author->nome}},
 data di nascita: {{$author->b_date}},
 country: {{$author->country}}
</p>

@if($author->books->count())
    <h3> books: </h3>

    <ul>
        @foreach ($author->books as $book)
                <li> <a href="/books/{{$book->id}}">{{$book->titolo}}</li>
        @endforeach
    </ul>
@endif

<form action="/authors/{{$author->id}}/edit" method="get">
    <input type="submit" value="edit/delete">
</form>

<a href="/"><button>torna alla home</button></a>

