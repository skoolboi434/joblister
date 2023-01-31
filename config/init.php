<?php
// Start Session
session_start();

// Confif file
require_once 'config.php';

// Include Helpers
require_once 'helpers/system_helper.php';

// Autoload classes
spl_autoload_register(function ($class_name){
	require_once 'lib/'.$class_name. '.php';
});