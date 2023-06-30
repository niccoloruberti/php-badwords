<?php
    $paragrafo = $_GET["paragrafo"];
    $censura = $_GET["censura"];

    // stampo il paragrafo e la sua lunghezza
    echo 'Paragrafo:<br>'
    .$paragrafo;
    echo '<br>lunghezza paragrafo: '.strlen($paragrafo).'<br>';

    //stampo il paragrafo sostituendo la parola da censurare con '***' e la sua lunghezza
    echo '<br><br>Paragrafo censurato:<br>'
    .str_replace($censura,'***',$paragrafo);
    $paragrafoCensurato = str_replace($censura,'***',$paragrafo);
    echo '<br>lunghezza paragrafo: '.strlen($paragrafoCensurato).'<br>';
?>