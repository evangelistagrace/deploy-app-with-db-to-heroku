<?php

$host = 'localhost';
$port = 5432;
$dbname = 'deploytoherokututorial';
$user = 'postgres';
$password = '413506';

$db = pg_connect(
    "
    host = $host
    port = $port
    dbname = $dbname
    user = $user
    password = $password
    "
) or die('Could not connect: ' . pg_last_error());;


session_start();

?>