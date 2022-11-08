<?php
$link= "ex3.xml";
$xml = simplexml_load_file($link) -> materia;
foreach($xml -> aula as $aula){
     echo "<strong>Título:</strong> ".utf8_decode($aula -> titulo)."<br />"; 
     echo "<strong>Texto:</strong> ".utf8_decode($aula -> texto)."<br />"; 
     
foreach($aula-> topico as $topico){ 
    echo "<strong>Item:</strong> ".utf8_decode($topico -> item01)."<br />"; 
    echo "<strong>Item:</strong> ".utf8_decode($topico -> item02)."<br />"; } 
    echo "<br />"; }