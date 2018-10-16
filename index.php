<?php
//$string = "22-11-2018";
//$patterns = '/(\d{1,2})-(\d{1,2})-(\d{1,4})/';
//$replace = 'Year: $3, month: $2, day: $1';
//echo preg_replace($patterns, $replace, $string) . "<br/>";
//phpinfo();

//Error
ini_set('display_errors', 1);
error_reporting('e_all');
//Open Session
session_start();
//Require
define('ROOT', dirname(__FILE__));
require_once (ROOT . '/components/Autoload.php');

//Router
$router = new Router();
$router->run();



