<?php

$servername = "db";
$username = "root";
$password = "";
$banco = "banco-mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $banco);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$res = $conn->query("SELECT * from pacientes" );

echo "<pre>";
print_r($res->fetch_all())

?>