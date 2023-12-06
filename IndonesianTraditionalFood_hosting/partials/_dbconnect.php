<?php
$server = "intrafood.tifint.myhost.id";
$username = "tifintmy_intrafood";
$password = "@JTIpolije2023";
$database = "tifintmy_intrafood";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Error". mysqli_connect_error());
}

?>