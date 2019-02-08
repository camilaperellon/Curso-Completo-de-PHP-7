<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once("vendor/autoload.php");

use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
);
Tpl::configure( $config );
// Add PathReplace plugin (necessary to load the CSS with path replace)
$tpl = new Tpl;
// assign a variable
$tpl->assign( "name", "Camila" );
$tpl->assign( "version", PHP_VERSION );
// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );
// draw the template
$tpl->draw( "index" );

?> 
