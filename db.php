<?php
$host = 'localhost';
$user = 'root'; // Default XAMPP user
$pass = ''; // Default XAMPP password
$dbname = 'vehicle_records';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die('Database Connection Failed: ' . $conn->connect_error);
}
?>
