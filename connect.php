<?php
//Database config
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'Tanawat_ai';
$dbName = 'admin';

//create db connection
$connect = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if ($connect->connect_error)
    die("Connection failed". $db->connect_error)



?>

