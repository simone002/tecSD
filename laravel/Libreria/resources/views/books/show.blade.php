@php

    use App\Models\Author;

    $author= Author::findOrFail($book->author_id);

@endphp

<h1> Book: {{$book->id}}</h1>
<p> titolo: {{$book->titolo}},
    anno: {{$book->anno}},
    prezzo: {{$book->prezzo}},
    autore: <a href="/authors/{{$author->id}}">{{$author->nome}}</a>
</p>

<form action="/books/{{$book->id}}/edit" method="get">
    <input type="submit" value="edit/delete">
</form>

<a href="/"><button>torna alla home</button></a>

