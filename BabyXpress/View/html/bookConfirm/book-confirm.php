<?php
$localhost = 'localhost';
$user = 'root';
$pass = '';
$db = 'dbbabyxpress';

// mysqli instance
$mysqli = new mysqli($localhost, $user, $pass, $db);

// check mysqli connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

$query = "SELECT name, profile_pic FROM user";

$pdo = new PDO('mysql:host=localhost;dbname=dbbabyxpress', 'root', '');

$result = $pdo->query($query);
$cust = $result->fetchAll(PDO::FETCH_ASSOC);

// ambil data profile pic cust n namanya
foreach ($cust as $cust) {
    echo '<div class="customer">';
    echo '<img src="' . $customer['profile_pic'] . '" alt="Profile Picture">';
    echo '<p>' . $customer['name'] . '</p>';
    echo '</div>';
}

$mysqli->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../css/book-confirm.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
        <title>Booking Confirmation</title>
    </head>
    <body>
        <div class="navbar">
            <!-- hamburger menu -->
            <h1>Booking Confirmation</h1>
            <button class="back-btn" >Back</button>
            <button class="logout-btn">Logout</button>
        </div>
        <div class="customer-list">
            <div class="container">
                <!-- the background with color A7BBC7 -->
                <!-- rectangle buat background cust profile pic n name -->
                <button type="button" class="btn btn-light">Confirm</button>
                <span class="text-wrap text-capitalize fs-6 fw-light">John Doe</span>
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
