<?php
$host = 'localhost';
$db = 'user_auth';
$user = 'root';
$pass = '';


$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    echo "<h1>Berjaya</h1>";
}
?>