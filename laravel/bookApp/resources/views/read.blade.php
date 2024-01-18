<html>
    <body>
        libri:
        @foreach ($books as $book)

        <form action='/form' method='POST'>
            @csrf
            <p> id: {{$book->id}} - isbn: {{$book->isbn}} - titolo: {{$book->titolo}} - autore: {{$book->autore}} - prezzo: {{$book->prezzo}}</p>
            <input type='hidden' name="isbn" value='{{$book->isbn}}'>
            <input type='hidden' name="titolo" value='{{$book->titolo}}'>
            <input type='hidden' name="autore" value='{{$book->autore}}'>
            <input type='hidden' name="prezzo" value='{{$book->prezzo}}'>
            <input type='submit' name='action' value='Modifica'>
            <input type='submit' name='action' value='Rimuovi'>
            <input type='hidden' name="id" value='{{$book->id}}'>
        </form>
        @endforeach

        <a href='/'><button>torna alla home</button></a>
    </body>
</html>
