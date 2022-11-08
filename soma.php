<?php
    if (isset($_GET["a"]))
    {
        $a = $_GET["a"];
    }
    else
    {
        $a = 2000;
    }

    if (isset($_GET["b"]))
    {
        $b = $_GET["b"];
    }
    else
    {
        $b = 10;
    }

    $soma = $a + $b;
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <p><b><?php echo $a; ?></b> + <b><?php echo $b; ?></b> = </p>
        <p><b><?php echo $soma; ?></b></p>
    </center>
    
    
</body>
</html>