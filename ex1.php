<?php
$link= "ex1.xml"; 
$xml = simplexml_load_file($link) -> materia;
foreach($xml-> aula as $aula){
     echo "<strong>Título:</strong> ".utf8_decode($aula -> titulo)."<br />";
      echo "<strong>Texto:</strong> ".utf8_decode($aula -> texto)."<br />";
       echo "<br />"; }