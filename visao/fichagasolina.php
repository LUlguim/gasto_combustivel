<?php
  session_start();
  if(isset($_SESSION['erros']) &&
     isset($_SESSION['post'])){
    $erros = unserialize($_SESSION['erros']);
    $post = unserialize($_SESSION['post']);
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="utf-8">
      <title>CONSUMO MÉDIO COMBUSTIVEL</title>
      <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
      <form action="../controle/controle.php" method="post" name="formconsumo">
              <?php
      if(isset($_SESSION['erros'])){
        foreach($erros as $e){
          echo "<br>".$e;
        }
        unset($_SESSION['erros']);
      }
      ?>
      <div>
            <input type="text" name="txtkmida" id="txtkmida" placeholder="Km ida" required="Preencher o campo"/>      
      </div>      
      <div>
            <input type="text" name="txtkmvolta" id="txtkmvolta" placeholder="Km volta" required="Preencher o campo"/>
      </div>
      <div>
            <input type="text" name="txtltabastecido" id="txtltabastecido" placeholder="Litros abastecidos" required="Preencher o campo"/>
      </div>
      <div>
            <input type="submit" name="btncadastrar" value="Cadastrar" />
      </div>
      <div>
            <input type="reset" name="btnlimpar" value="Limpar" />
      </div>
