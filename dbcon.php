<?php

$namaserver = "localhost";
$username = "root";
$password = "";
$dbname = "restdb";

$conect = new mysqli($namaserver, $username, $password, $dbname);

if ($conect->connect_error) {
    die("Connection failed: " .$conect->connect_error);
    
}