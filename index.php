<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Record System</title>
</head>
<body>
    <h2>Welcome to Vehicle Record System</h2>
    <a href="form.html">Go to Vehicle Registration</a>

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
