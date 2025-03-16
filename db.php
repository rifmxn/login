<?php
$host = 'sql12.freesqldatabase.com';
$db = 'sql12767940';
$user = 'sql12767940';
$pass = 'baI1tCBIgr';


$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    echo "<h1>Berjaya</h1>";
}
?>
