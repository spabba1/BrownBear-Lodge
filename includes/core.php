<?php
// Load config file first
require_once(LIB_PATH.DS."config.php");

// Load basic functions next so that everything after can use them
require_once(LIB_PATH.DS."functions.php");

// Load core objects
require_once("lib".DS."MySQLiDb".DS."MysqliDb.php");
//require_once(LIB_PATH.DS."session.php");

/*
$db = new MysqliDb (Array (
  'host' => DB_HOST,
  'username' => DB_USER,
  'password' => DB_PASS,
  'db'=> DB_NAME,
  'charset' => 'utf8'));
*/

// Load database-related classes
//require_once(LIB_PATH.DS."twitter.php");
//require_once(LIB_PATH.DS."user.php");
//require_once(LIB_PATH.DS."facebook.php");
?>
