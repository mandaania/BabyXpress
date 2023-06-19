<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../../css/booking.css">
    <title>Babysitter Booking</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaisei Decol">
    <link rel="stylesheet" href="../../css/navbar-manda.css">
    <link rel="stylesheet" href="../../css/hamburgermenu.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

</head>

<body>
    <header>
        <nav>
            <div class="navbar">
                <div class="container nav-container">
                    <input class="checkbox" type="checkbox" name="" id="" />
                    <div class="hamburger-lines">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                    </div>
                    
                    <div class="menu-items">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Schedule</a></li>
                        <li><a href="#">Book Now</a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </div>
                </div>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <!-- <button class="btn btn-outline-dark btn-sm log-out px-3 me-2">Log Out</button> -->
                        <a href="logout.php" class="btn btn-outline-dark btn-sm log-out px-3 me-2"><button class="btn btn-outline-dark btn-sm log-out px-3 me-2"> Logout</button></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- <div class="container-fluid"> -->
    <!-- <div class="logout-button" style="background-color: #DA7F8F;">
			<a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
		</div>	 -->
    <!-- </div> -->

    <div class="container">
        <h2>Book a Babysitter</h2>
        <form method="post" action="booking.php">
            <div class="form-group">
                <label for="fName">Name:</label>
                <input type="text" class="form-control" name="fName" id="fName" placeholder="Ex: Harry" required>
            </div>
            <!-- full address -->
            <div class="form-group">
                <label for="address">Address:</label>
                <!-- <textarea id="address" class="form-control" name="address" placeholder="Ex: Binus University, Kampus Anggrek. Jakarta Barat, 11530"></textarea> -->
                <input type="text" class="form-control" name="address" placeholder="Ex: Binus University, Kampus Anggrek. Jakarta Barat, 11530" required>
            </div>
            <div class="form-group radio-group">
                <label for="address">Gender:</label>
                <div>
                    <label>
                        <input type="radio" name="gender" value="female">
                        Female
                    </label>
                    <label>
                        <input type="radio" name="gender" value="male">
                        Male
                    </label>
                </div>
            </div>

            <!-- <label for="female-checkbox" class="button-label">Female</label>
                <input type="checkbox" id="female-checkbox" class="hidden-checkbox">

                <label for="male-checkbox" class="button-label">Male</label>
                <input type="checkbox" id="male-checkbox" class="hidden-checkbox"> -->

            <!-- <textarea id="address" class="form-control" name="address" placeholder="Ex: laki-laki / perempuan"></textarea> -->

            <!-- phone number -->
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Ex: 0812xxxxxxxxx" required>
                <!-- <input type="tel" class="form-control" name="phone" id="phone" placeholder="Ex: 0812xxxxxxxxx"> -->
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required>
            </div>
            <!-- <div class="form-group">
                <label for="comments">Comments:</label>
                <textarea id="comments" name="comments" rows="4"></textarea>
            </div> -->
            <div class="form-group">
                <label for="transfer-receipt">Transfer receipt:</label>
                <input type="file" id="transfer-receipt" accept="image/*,.pdf" />
            </div>

            <button type="submit">Cancel</button>
            <button type="submit">Book Babysitter</button>
        </form>
    </div>

</body>

</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $book_id = $_POST["book_id"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    // Validate and process the form data (you can add more validation here)
    if (!empty($username) && !empty($email) && !empty($date) && !empty($time)) {
        // Assuming you have a database connection, you can store the booking details in your database here
        // You'll need to modify the code below to interact with your specific database setup

        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "BabyXpress";

        // Create a new database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute the SQL query to insert the booking details into the database
        $stmt = $conn->prepare("INSERT INTO bookings (book_id, username, email, date, time) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $book_id, $username, $email, $date, $time);
        $stmt->execute();

        // Close the statement and database connection
        $stmt->close();
        $conn->close();

        // Display a success message to the user
        echo "Booking successful!";
    } else {
        // Display an error message if form validation fails
        echo "Please fill in all required fields.";
    }
}
?>