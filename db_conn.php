<?php
$host = "127.0.0.1";
$user = "root";
$password = '';
$db_name = "users";
$conn = mysqli_connect($host, $user, $password, $db_name, 3307);
if(mysqli_connect_errno()) {
    die("Failed to connect with MySQL: ". mysqli_connect_error());
}

