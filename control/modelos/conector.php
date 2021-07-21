<?php
$servername = "localhost";
$database = "registroiglesia";
$username = "root";
$password = "12345";
// creación de la conexión
$conn = mysqli_connect($servername, $username, $password, $database);
// confirmación de la conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>