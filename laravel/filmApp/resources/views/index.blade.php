<!--
    Implementare uno script in PHP che consenta di gestire un database di film.
    Il database di film dovrebbe avere i seguenti campi:

    Titolo
    Anno
    Paese
    Regista

    Le funzioni richieste sono:

    - CreateFilm(): Permette di inserire un nuovo record nel database con le informazioni specificate.

    - ReadAllFilms(): Restituisce tutti i film presenti nel database.

    - UpdateFilm(): Aggiorna le informazioni di un film nel database in base al vecchio titolo.

    - DeleteFilm(): Elimina un film dal database in base al titolo.

-->
<html>
    <body>
        per visualizzare tutti i Films
        <form action="/read" method="get">
            <button> invia </button>
        </form>

        per inserire un nuovo record
        <form action="/create" method="POST">
            @csrf
            titolo: <input type="text" name="titolo" required><br>
            anno: <input type="text" name="anno" required><br>
            paese: <input type="text" name="paese" required><br>
            regista: <input type="text" name="regista" required><br>

            <button> inserisci </button>
        </form>

    </body>
</html>
