<?php
"localhost";
$user = "root";
$password = "";
$database = "construction_site";
($host, $user, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
