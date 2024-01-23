<h1> LIBRI </h1>

@foreach ($books as $book )
    <ul>
   <li> <a href="/books/{{$book->id}}">{{$book->titolo}}</a></li>
    </ul>
@endforeach

<br><br>
<a href="/"><button>torna alla home</button></a>
