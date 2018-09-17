<?php
  session_start();
  if(!isset($_SESSION['g'])){
    header('location:fichagasolina.php');
  }
  include '../modelo/gasolina.class.php';
  $g = unserialize($_SESSION['g']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>CONSUMO MÉDIO COMBUSTIVEL</title>
      <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<form action="fichagasolina.php" method="post">
	<?php
	echo "<h2>".$g."</h2>";
	unset($_SESSION['g']);
	?>
	</form>
	<div>
		<input type="submit" name="btnvoltar" value="Voltar" onClick="history.go(0)" />
	</div>
	

    