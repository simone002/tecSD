Scrivi una stringa e premi invio:
<form method="POST" action=" <?php echo $_SERVER["PHP_SELF"]; ?>">
    <input type="text" name="pippo">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['pippo'];
    echo "hai scritto \"$str\" nel form qui sopra";
}
?>