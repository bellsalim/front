<?php
    if (isset($_GET["estacao"]))
    {
        $estacao = $_GET["estacao"];
    }
    else
    {
        $estacao = "";    
    }

    if (isset($_GET["dia"]))
    {
        $diaHoje = $_GET["dia"];
    }
    else
    {
        $diaHoje = 0;    
    }
   
    if (isset($_GET["mes"]))
    {
        $mes = $_GET["mes"];
    }
    else
    {
        $mes = 0;
    }
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
<?php
    switch ($estacao) {
        case "V":
            echo "Estamos no Verão.<br>Que calor!!";
            break;
        case "I":
            echo "Agora é Inverno.<br>Está muito frio!!";
            break;
        case "P":
            echo "Primavera é linda!!!<br>Muitas flores.";
            break;
        case "O":
            echo "As folhas caem no Outono!!";
            break;
        case "":
            echo "<b>Informar uma opção.</b>";
            break;
        default:
            echo "<font color='red'>";
            echo "Informação inválida";
            echo "</font>";
    }
    if ($diaHoje != 0 && $mes != 0)
    {
        echo "<p>Hoje é dia ".$diaHoje." de ".$mes."<p>";
    }
?>
</body>
</html>
