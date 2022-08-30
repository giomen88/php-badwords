<?php
/* Descrizione:
Creiamo una variabile con un paragrafo di testo a scelta.
Stampiamo a schermo il paragrafo e la sua lunghezza.
Passiamo sulla barra del browser in query string una parola che vogliamo censurare
Recuperiamo la parola da censurare via PHP e  sostituiamo tutte le sue occorrenze nel paragrafo con 3 asterischi.
Stampiamo di nuovo il paragrafo e la sua nuova lunghezza.
*/

echo $text = "La tua password è: 1234" ;

echo '<br/>';

echo strlen($text);

$password = $_GET["password"];

echo '<br/>';

echo $replaced_text = str_replace($password, '***', $text);

echo '<br/>';

echo strlen($replaced_text);

?>
