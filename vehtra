/*
============================================
Vehicle Record System - PHP & MySQL
============================================
*/

// Database Connection - db.php
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

// Create Vehicle Table (Import this in phpMyAdmin)
/*
CREATE TABLE vehicles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    plate_number VARCHAR(50) NOT NULL,
    model VARCHAR(100) NOT NULL,
    color VARCHAR(50) NOT NULL,
    owner_name VARCHAR(100) NOT NULL,
    registration_date DATE NOT NULL
);
*/

// Insert Vehicle - insert.php
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

// Fetch Vehicles - fetch.php
<?php
include 'db.php';
$result = $conn->query("SELECT * FROM vehicles");
$vehicles = [];
while ($row = $result->fetch_assoc()) {
    $vehicles[] = $row;
}
echo json_encode($vehicles);
?>

// HTML Form - index.php
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Record System</title>
</head>
<body>
    <h2>Register a Vehicle</h2>
    <form action="insert.php" method="POST">
        Plate Number: <input type="text" name="plate_number" required><br>
        Model: <input type="text" name="model" required><br>
        Color: <input type="text" name="color" required><br>
        Owner Name: <input type="text" name="owner_name" required><br>
        Registration Date: <input type="date" name="registration_date" required><br>
        <button type="submit">Submit</button>
    </form>

    <h2>Vehicle List</h2>
    <table border="1">
        <tr>
            <th>Plate Number</th>
            <th>Model</th>
            <th>Color</th>
            <th>Owner Name</th>
            <th>Registration Date</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM vehicles");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['plate_number']}</td>
                    <td>{$row['model']}</td>
                    <td>{$row['color']}</td>
                    <td>{$row['owner_name']}</td>
                    <td>{$row['registration_date']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
