<?php
class Validacao{
	public static function validarNum($v){
		$exp = "/^[0-9]{2,5}$/";// ou // ou %%.
		return preg_match($exp,$v);//Verifica se uma string casa com a expressão.
	}//fecha fucntion valNum.
}
