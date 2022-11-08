<?php
 global $stagePlay = $_POST["stage-play"];
 global $qtd = $_POST["qtd"];
 global  $name = $_POST["name"];
 global  $cpf = $_POST["cpf"];
 global  $creditCard = $_POST["credit-card"];
 global $cvc = $_POST["cvc"];
 global $preço;
 global $data= date_default_timezone_set('America/Sao_Paulo');
 global $mês=date("m");
 global $foto;
  switch ($stagePlay) {
    case 'swans-lake':
      $preço=150;
      $foto=0;
      $stagePlay="Lago dos Cisnes";
      break;
    case 'ghost-opera':
      $preço=300;
      $foto=1;
      $stagePlay="O Fantasma da Ópera";
      break;
    case 'beauty-beast':
      $preço=300;
      $foto=2;
      $stagePlay="A Bela e a Fera";
      break;
    case 'palavra-cantada':
      $preço=150;
      $foto=3;
      $stagePlay="Palavra Cantada";
      break;
    default:
      # code...
      break;
  }
  $preçototal=($preço*$qtd);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta charset="utf-8"/>
  <title>Comprovante</title>
  <link rel="stylesheet" href="./css/global.css">
  <link rel="stylesheet" href="./css/comprovante.css">
  <script src="https://kit.fontawesome.com/6d44882ec6.js" crossorigin="anonymous"></script>
</head>

<body>
  <section id="main">
    <section id="comprovante">
   
      <div>
        <header>
          <h2>Detalhes da Compra</h2>
          <center> <a href="qrcode.php">  Ingresso QRCode  </a>   </center>
          <hr style="margin-bottom: 24px;">
        </header>
        <article>
          <?php
            echo"<h3 style='margin:0;font-size:16px;margin-bottom:36px;'>Jundiaí, ";
            switch ($mês) {
              case '1':
                echo date("d")." de Janeiro de ".date("Y")."</h3>";
                break;
              case '2':
                echo date("d")." de Fevereiro de ".date("Y")."</h3>";;
                break;
              case '3':
                echo date("d")." de Março de ".date("Y")."</h3>";
                break;
              case '4':
                echo date("d")." de Abril de ".date("Y")."</h3>";
                break;
              case '5':
                echo date("d")." de Maio de ".date("Y")."</h3>";
                break;
              case '6':
                  echo date("d")." de Junho de ".date("Y")."</h3>";
                break;
              case '7':
                  echo date("d")." de Julho de ".date("Y")."</h3>";
                break;
              case '8':
                echo date("d")." de Agosto de ".date("Y")."</h3>";
                break;
              case '9':
                echo date("d")." de Setembro de ".date("Y")."</h3>";
              break;
              case '10':
                echo date("d")." de Outubro de ".date("Y")."</h3>";
                break;
              case '11':
                echo date("d")." de Novembro de ".date("Y")."</h3>";
                break;
              case '12':
                echo date("d")." de Dezembro de ".date("Y")."</h3>";
              default:
                # code...
                break;
            }
            echo"<h3>Títular do cartão: <strong>".$name."</strong></h3>";
            echo"<h3>Número do cartão: <strong>".$creditCard."</strong></h3>";
            echo"<h3>Peça: <strong>".$stagePlay."</strong></h3>";
            echo"<h3>Ingressos: <strong>".$qtd."</strong></h3>";
            echo"<h3>Valor total: <strong>R$".number_format($preçototal, 2, "," , ".") . "</strong></h3>";
          ?>
        </article>
      </div>
    </section>
    <section id="background">
    
    <?php
    switch ($foto) {
      case 0:
        echo"<img src="."assets/swans-lake.jpg".">";
        break;
      case 1:
        echo"<img src="."assets/phantom-of-the-opera.jpg".">";
        break;
      case 2:
        echo"<img src="."assets/beauty-and-the-beast.jpg".">";
        break;
      case 3:
        echo"<img src="."assets/palavra-cantada.jpeg".">";
        break;
    }
    ?>
    </section>
  </section>
 
</body>
</html>