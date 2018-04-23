<?php
$servername = "sql143.main-hosting.eu.";
$username = "u515231905_koko";
$password = "CouCou8407/";
$database = "u515231905_user";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
echo "Connected successfully";

?>