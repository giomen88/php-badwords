<?php
/* Descrizione:
Creiamo una variabile con un paragrafo di testo a scelta.
Stampiamo a schermo il paragrafo e la sua lunghezza.
Passiamo sulla barra del browser in query string una parola che vogliamo censurare
Recuperiamo la parola da censurare via PHP e  sostituiamo tutte le sue occorrenze nel paragrafo con 3 asterischi.
Stampiamo di nuovo il paragrafo e la sua nuova lunghezza.
*/

$password = $_GET["password"];

$text = "La tua password è: $password" ;

echo $text;

echo '<pre><br/></pre>';

echo strlen($text);

echo '<pre><br/></pre>';

$replaced_text = str_replace($password, '***', $text);

echo '<pre><br/></pre>';

echo strlen($replaced_text);


?>
