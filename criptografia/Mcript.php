<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

$data = ["nome"=>"Camila"];

define('SECRET', pack('a16', 'senha'));

$mcrypt = mcrypt_encrypt(
	MCRYPT_RIJNDAEL_128,  //algoritmo de encriptação
	SECRET,
	json_encode($data),
	MCRYPT_MODE_ECB  //modo de encriptografia
);

var_dump($mcrypt);

var_dump(PHP_VERSION);
?> 