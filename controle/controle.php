<?php
session_start();
include '../modelo/gasolina.class.php';
include '../util/validacao.class.php';
$g = new Gasolina();
$quantErros = 0;
$erros = array();
if(!Validacao::validarNum($_POST['txtkmida'])){//Mostrando mensagem de ERRO se for diferente da function validarNum.
	$quantErros++;
	$erros[0] = "Caracter invalído.";
}
if(!Validacao::validarNum($_POST['txtkmvolta'])){
	$quantErros++;
	$erros[1] = "Caracter invalído.";
	
}
if(!Validacao::validarNum($_POST['txtltabastecido'])){
	$quantErros++;
	$erros[2] = "Caracter invalído.";
}
if($quantErros == 0){
	$g->kmida = $_POST['txtkmida'];
	$g->kmvolta = $_POST['txtkmvolta'];
	$g->ltabastecido = $_POST['txtltabastecido'];
	 var_dump($g);
  	$_SESSION['g'] = serialize($g);
	header("location:../visao/resultado.php");	
}else{
	$_SESSION['erros'] = serialize($erros);
  	$_SESSION['post'] = serialize($_POST);
	header("location:../visao/fichagasolina.php");
}