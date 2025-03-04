<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $plate_number = $_POST['plate_number'];
    $model = $_POST['model'];
    $color = $_POST['color'];
    $owner_name = $_POST['owner_name'];
    $registration_date = $_POST['registration_date'];

    $sql = "INSERT INTO vehicles (plate_number, model, color, owner_name, registration_date) 
            VALUES ('$plate_number', '$model', '$color', '$owner_name', '$registration_date')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Vehicle Added Successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
