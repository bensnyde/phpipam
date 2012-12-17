<?php

/* @database functions ------------------- */
require( dirname(__FILE__) . '/../config.php' );
require( dirname(__FILE__) . '/dbfunctions.php' );



/* @debugging functions ------------------- */
if ($debugging == 0) {
  	ini_set('display_errors', 1);
    error_reporting(E_ERROR | E_WARNING);
}
else{
    ini_set('display_errors', 1); 
    error_reporting(E_ALL ^ E_NOTICE);
}


/* set latest version */
define("VERSION", "0.7");

/* @general functions ------------------- */
include_once('functions-common.php');

/* @network functions ------------------- */
include_once('functions-network.php');

/* @tools functions --------------------- */
include_once('functions-tools.php');

/* @admin functions --------------------- */
include_once('functions-admin.php');

/* @upgrade functions ------------------- */
include_once('functions-upgrade.php');

?>