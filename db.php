<?php
$host = "sql12.freesqldatabase.com";
$user = "sql12814242";
$password = "EX4QU5NKn7";
$database = "sql12814242";
$port = 3306;

$conn = mysqli_connect($host, $user, $password, $database, $port);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
