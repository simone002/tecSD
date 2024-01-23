<h1> AUTORI </h1>

@foreach ($authors as $author )
    <ul>
   <li> <a href="/authors/{{$author->id}}">{{$author->nome}}</a></li>
    </ul>
@endforeach

<br><br>
<a href="/"><button>torna alla home</button></a>
