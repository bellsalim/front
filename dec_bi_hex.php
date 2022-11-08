<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>
<style>
    body {background-color: #98FB98;}
    p{font-size :20px;}
    </style>
<body >
    <center>
    <?php
    $subir;
    for($subir=0;$subir<=16;$subir++){
$numero=$subir; 
echo "<p>decimal: ".$numero." ";
echo "binário: ".decbin($numero)." ";
echo "hexadecimal: ".dechex($numero)."</p>";
echo "";
    }
$numero=3.5; 
echo "<p>decimal: ".$numero." ";
echo "binário: ".decbin($numero)." ";
echo "hexadecimal: ".dechex($numero)."</p>";
$numero=8/3; 
echo "<p>decimal: ".$numero." ";
echo "binário: ".decbin($numero)." ";
echo "hexadecimal: ".dechex($numero)."</p>";
$numero=13; 
$numero2=3;
echo "<p>decimal: ".$numero."/".$numero2." "; 
echo "binário: ".decbin($numero)."/".decbin($numero2)." ";
echo "hexadecimal: ".dechex($numero)."/".dechex($numero2)."</p>";
?>
    </center>
</body>
</html>