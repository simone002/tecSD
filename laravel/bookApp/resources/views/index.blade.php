<html>
    <body>
        lista film
        <form action="/read" method="GET">
            <button>invia</button>
        </form>

        inserire record
        <form action='/create' method='POST'>
            @csrf
            <input type='text' name="isbn" required> <br>
            <input type='text' name="titolo" required> <br>
            <input type='text' name="autore" required> <br>
            <input type='text' name="prezzo" required> <br>
            <button>inserisci</button>
    </body>
</html>

