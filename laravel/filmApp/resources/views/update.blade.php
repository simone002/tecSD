<html>
    <body>

        <h3>Aggiorna Film</h3>

        <form action="/update" method="POST">
            @csrf

            titolo: <input type="text" name="titolo" value="{{$film->titolo}}" required><br>
            anno: <input type="text" name="anno" value="{{$film->anno}}" required><br>
            paese: <input type="text" name="paese" value="{{$film->paese}}" required><br>
            regista: <input type="text" name="regista" value="{{$film->regista}}" required><br>
            <button> salva modifiche </button>
            <input type="hidden" name="id" value="{{$film->id}}">
        </form>

        <br><a href='/'><button>Torna alla home</button></a>

    </body>
</html>
