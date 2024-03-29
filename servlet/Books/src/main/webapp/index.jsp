<!--

Sviluppare uno o più script PHP e pagine HTML che implementino le funzionalità “CRUD” (Create, Read, Update, Delete) per una tabella books.

1) Richieste (NB: sono R e C in CRUD)

- Realizzare un form HTML con un bottone che, cliccato, richieda al server la lista dei record presenti nella tabella books e la visualizzi 
  in una pagina HTML.

- Realizzare un form HTML che permetta l’inserimento di un nuovo record nella tabella books, verificando che si vedano i nuovi inserimenti.

2) Facoltative (NB: sono U e D in CRUD)

- Nella lista dei record (come da punto 1), rendere l’attributo isbn di ogni record un link che, cliccato, porta a un form di aggiornamento 
  per il record corrispondente.

- Aggiungere, in quest’ultimo form di aggiornamento, un bottone per l’eliminazione del record dalla tabella books.

    ISBN TITOLO AUTORE PREZZO

    08:18
-->

<html>
    <body>
        <h2>Books</h2>

        <form action="/book" method="POST">
            <label for="titolo">Titolo:</label>
            <input type="text" name="titolo"><br>
            <label for="autore">Autore:</label>
            <input type="text" name="autore"><br>
            <label for="prezzo">Prezzo:</label>
            <input type="text" name="prezzo"><br><br>
            <button>Inserisci libro</button>
            <input type="hidden" name="action" value="create">
        </form>

        <form action="/book" method="GET">
            <button>Vedi tutti</button>
            <input type="hidden" name="action" value="read">
        </form>
    </body>
</html>
