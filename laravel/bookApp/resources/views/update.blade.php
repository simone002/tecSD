<html>
    <body>

        <h3>Aggiorna Film</h3>

        <form action="/update" method="POST">
            @csrf
            isbn: <input type="text" name="isbn" value="{{$book->isbn}}" required><br>
            titolo: <input type="text" name="titolo" value="{{$book->titolo}}" required><br>
            autore: <input type="text" name="autore" value="{{$book->autore}}" required><br>
            prezzo: <input type="text" name="prezzo" value="{{$book->prezzo}}" required><br>
            <button> salva modifiche </button>
            <input type="hidden" name="id" value="{{$book->id}}">
        </form>

        <br><a href='/'><button>Torna alla home</button></a>

    </body>
</html>
