<p>elencoFilmRegista</p>
<form action="/read" method="GET">
    <label for="regista">regista:</label>
    <input type="text" id="regista" name="regista" required>
    <input type="hidden"  name="readF" value="film">
    <button type="submit" id="ricerca">ricerca</button>
</form>


<p>elenco Record</p>
<form action="/readALL" method="GET">
    <input type="hidden"  name="readF" value="All">
    <button type="submit">ricerca</button>
</form>



