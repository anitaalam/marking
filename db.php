<?php
// Step 1: connect to the database
define('_HOST_NAME','localhostt');
define('_DATABASE_NAME','marking');
define('_DATABASE_USER_NAME','root');
define('_DATABASE_PASSWORD','');

$MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);

if($MySQLiconn->connect_errno) {
    die("ERROR : -> ".$MySQLiconn->connect_error);
}