<?php

session_start();

//Depois de verificar login e senha reinicia a sessão
session_destroy();

seesion_start();

session_regenerate_id();

echo session_id();

?>