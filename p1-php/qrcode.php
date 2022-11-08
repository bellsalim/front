<?php
$qtd = $_POST;
$name= $_POST;
$cpf= $_POST;
$preço= $_POST;
$data= date_default_timezone_set('America/Sao_Paulo');
$mês=date("m");
$cv
?>
<!DOCTYPE html>

<html>
	<header>
	<meta charset="UTF-8">
	<title> Comprovante </title>
	
</header>
<body>
	<form method="post">
	<input type ="submit" value="gerar QRCode"/>
	<input type="hidden" name="gerou" value="5">
</form>
	
	<?php

	
	if (isset ($_POST['gerou'])){
		require ("phpqrcode/qrlib.php");
		
	$qtd ;
    $name;
    $cpf;
    $preço;
    $data= date_default_timezone_set('America/Sao_Paulo');
    $mês=date("m");	
		

		QRcode ::png($qtd, $name, $cpf, $preço, $data, $mês, "Imagem_QRCODE_L.png", QR_ECLEVEL_L);

		echo '<img src= "Imagem_QRCODE_L.png"/>';
	}
	?>
</body>
</html>
	
	
	
