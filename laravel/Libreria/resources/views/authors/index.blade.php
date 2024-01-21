<h1> AUTORI </h1>

@foreach ($authors as $author )
    <a href="/authors/{{$author->id}}">{{$author->nome}}</a>
@endforeach

<br><br>
<a href="/"><button>torna alla home</button></a>
