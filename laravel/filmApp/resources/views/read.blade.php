<html>
    <body>
        elenco film

        @foreach ($films as $film)
            <form action="/form" method="POST">
                @csrf

                <p> id {{$film->id}} - titolo {{$film->titolo}} - anno {{$film->anno}} - paese {{$film->paese}} - regista {{$film->regista}} </p>
                <input type="hidden" name="id" value="{{$film->id}}">
                <input type="hidden" name="titolo" value="{{$film->titolo}}">
                <input type="hidden" name="anno" value="{{$film->anno}}">
                <input type="hidden" name="paese" value="{{$film->paese}}">
                <input type="hidden" name="regista" value="{{$film->regista}}">
                <input type="submit" name="action" value="Modifica">
                <input type="submit" name="action" value="Rimuovi">
            </form>
        @endforeach

        <br><a href='/'><button>Torna alla home</button></a>

    </body>
</html>
