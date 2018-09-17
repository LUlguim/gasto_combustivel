<?php
class Gasolina{
	private $kmida;
	private $kmvolta;
	private $ltabastecido;

	  public function __construct(){
 	 }

 	 public function __destruct(){
  	}
	public function __get($g){
		return $this->$g;
	}
	public function __set($g,$v){
		return $this->$g = $v;
	}
	public function calcularConsumo():float{
		return ($this->kmida + $this->kmvolta)/$this->ltabastecido;
	}//fecha calcularConsumo.

	public function __toString(){
		return nl2br("Km ida: $this->kmida
			Km volta: $this->kmvolta
			litros abastecido: $this->ltabastecido
			Consumo: {$this->calcularConsumo()} litros");
	}//fecha function __toString.
}//fecha class Gasolina.
