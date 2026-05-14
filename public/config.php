<?php

$host = "db";
$username = "user";
$password = "password";
$database = "crsigrid";

$yhendus = mysqli_connect($host, $username, $password, $database);

if (!$yhendus) {
    die("Ühendus ebaõnnestus: " . mysqli_connect_error());
}

?>