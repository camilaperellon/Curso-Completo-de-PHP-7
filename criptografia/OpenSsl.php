<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

$data = ["nome" => "Camila"];

//ENCRIPTAÇÃO
$openssl = openssl_encrypt( 
	json_encode($data),
	'AES-128-CBC',  //ALGORITMO PARA A ENCRIPTAÇÃO
	SECRET, //CHAVE
	0,  //FORMA DE RETORNO: 0->SÓ ENCRIPTA
	SECRET_IV
	);

echo $openssl;

//DESCRIPTAÇÃO
$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);

var_dump(json_decode($string, true));


?>