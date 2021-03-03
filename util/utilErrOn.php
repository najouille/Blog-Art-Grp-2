<?php
//////////////////////////////////////////////
//
//  Messages d'erreurs : Mode DEV
//  Script : utilErrOn.php
//
//////////////////////////////////////////////
//
ini_set('display_errors', 'on');
ini_set('display_startup_errors', 'on');
error_reporting(E_ALL);
error_reporting(-1); // reports all errors
ini_set("error_log", "./php-error.log");
