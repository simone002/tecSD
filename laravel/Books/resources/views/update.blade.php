<html>
    <body>
        <h3>Aggiorna Libro</h3>

        <form action="/update" method="POST">
            @csrf
            @method('PUT')

            isbn: <input type="text" name="isbn" value="{{$_GET['isbn']}}"><br>
            Titolo: <input type="text" name="titolo" value="{{$_GET['titolo']}}"><br>
            Autore: <input type="text" name="autore" value="{{$_GET['autore']}}"><br>
            Prezzo: <input type="text" name="prezzo" value="{{$_GET['prezzo']}}"><br><br>

            <button type="submit">Salva Modifiche</button>
            <input type="hidden" name="id" value="{{$_GET['id']}}">
        </form>

        <br><a href='/'><button>Torna alla home</button></a>
    </body>
</html>
