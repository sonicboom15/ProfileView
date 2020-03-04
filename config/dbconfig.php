<?php

define('Server','localhost');
define('Username','root');
define('Password','');
define('Dbname','profiletest');

$mysqli = new mysqli(Server, Username, Password, Dbname);

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>