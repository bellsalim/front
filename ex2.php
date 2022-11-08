<?php
$link= "ex2.xml";
 $xml = simplexml_load_file($link) -> materia;
foreach($xml -> aula as $aula){ 
    echo "<strong>Título:</strong> ".utf8_decode($aula -> titulo)."<br />"; 
    echo "<strong>Texto:</strong> ".utf8_decode($aula -> texto)."<br />"; 
    echo "<br />"; 
} 

foreach($xml -> nota as $nota){ 
        echo "<strong>Avaliação:</strong> ".utf8_decode($nota -> avaliacao)."<br />"; 
        echo "<strong>Peso:</strong> ".utf8_decode($nota -> peso)."<br />"; 
        echo "<br />"; 
    } 
    ?>