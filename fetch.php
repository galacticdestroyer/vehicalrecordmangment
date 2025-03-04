<?php
include 'db.php';
$result = $conn->query("SELECT * FROM vehicles");
$vehicles = [];
while ($row = $result->fetch_assoc()) {
    $vehicles[] = $row;
}
echo json_encode($vehicles);
?>
