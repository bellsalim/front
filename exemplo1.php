<?php
    echo "Alo Mundo";
    // comentário de linha
    /*
        comentário de bloco
    */

    $var1 = 1; // inteiro
    $var_num2 = 1.45; // real
    $varNum2 = 2.3;
    $var3 = "boa tarde"; // string
    $var4 = 'boa tarde'; // string
    $var5 = false; // booleano
    $var6 = "alunos";

    echo "<br>";
    echo $var1;
    
    echo "<br>";
    echo "Olá, $var6";
    echo "<br>Olá, ".$var6;

    $var6 = "estudantes";

    echo '<br>Olá, $var6';
    echo '<br>Olá, '.$var6;

    define("Valor", 10);
    define("valor", 20);
    define("VALOR", 30); // boas práticas

    echo "<br>Valor= ".VALOR;

    //define("VALOR", 40); exibe erro

    $a = 1;
    $b = "1";

    $a == $b; // V

    $a === $b; // F

    $soma = $var1 + $var1;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <?php
        echo "oi";
    ?>
    <br>
    <font color="red">
        <?php echo $var1; ?> + <?php echo $var1; ?> =
    </font> <font color="blue"><?php echo $soma; ?></font>
</body>
</html>