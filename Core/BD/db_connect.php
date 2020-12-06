<?php 



$servername = "localhost:3307";
$username   = "root";
$password   = "";



$conn = new mysqli($servername, $username, $password,"web_chris");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>