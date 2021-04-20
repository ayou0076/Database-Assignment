<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'final_1531';

$link = mysqli_connect($host, $username, $password) or die('Could not connect to MySQL');
mysqli_select_db($link, $dbname) or die('Could not find the database');

?>