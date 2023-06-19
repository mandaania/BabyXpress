<?php
session_start();
//return to login if not logged in
if (!isset($_SESSION['user']) || (trim($_SESSION['user']) == '')) {
	header('location:login.php');
}

include_once('../Model/LoginRegister/User.php');
// User.php
// ../../../Model/LoginRegister/User.php

$user = new User();

//fetch user data
$sql = "SELECT * FROM user WHERE id = '" . $_SESSION['user'] . "'";
$row = $user->details($sql);

?>
<!DOCTYPE html>
<html>

<head>
	<style>
		.center {
			text-align: center;
			/* Membuat teks menjadi rata tengah */
		}

		.column {
			display: flex;
			float: left;
			width: 33.33%;
			box-sizing: border-box;
			padding: 20px;
			align-content: center;
		}

		.columnside {
			float: left;
			width: 2.5%;
			height: 100%;
			box-sizing: border-box;
			padding: 20px;
		}

		.columnside2 {
			float: left;
			width: 7.5%;
			box-sizing: border-box;
			padding: 20px;
		}

		.columnsearch {
			float: left;
			width: 90%;
			box-sizing: border-box;
			padding: 20px;
			align-items: center;
		}

		.my-icon {
			font-size: 32px;

		}

		.my-icontengah {
			font-size: 300px;
			background-color: #DA7F8F;
			padding: 10px;
		}

		@media (max-width: 768px) {
			.column {
				width: 100%;
				padding: 10px;
			}

			.columnside,
			.columnside2 {
				display: none;
			}

			.columnsearch {
				width: 100%;
			}
		}

		@media (max-width: 480px) {
			.my-icontengah {
				font-size: 200px;
			}

			.p {
				font-size: 100px;
				margin: 10px;
			}
		}
	</style>
	<title>Homepage Customer</title>
	<!-- <link rel="stylesheet" type="text/css" href="homepage.css"> -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
	<link rel="stylesheet" href="../View/css/navbar-manda.css">
</head>

<body>
	<div class="container-fluid">
		<!-- <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
	<nav>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<iconify-icon icon="charm:menu-hamburger" width="20"></iconify-icon>
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">Home</a></li>
						<li><a class="dropdown-item" href="#">Schedule</a></li>
						<li><a class="dropdown-item" href="#">Certification</a></li>
						<li><a class="dropdown-item" href="../My Requests/my-requests.php">My Requests</a></li>
						<li><a class="dropdown-item" href="#">Income</a></li>
						<li><a class="dropdown-item" href="#">Settings</a></li>
						<li><a class="dropdown-item" href="#">Contact Us</a></li>
					</ul>
				</li>
				<li>
					<form action="" class="mt-2">
						<input type="text" placeholder="Search..." class="align-bottom ms-5 px-3 search" size="110">
						<button class="p-0 search-btn"><iconify-icon icon="material-symbols:filter-alt" width="22"></iconify-icon></button>
					</form>

				</li>
			</ul>

			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a href="../View/html/LoginRegister/logout.php" class="btn btn-outline-dark btn-sm log-out px-3 me-2"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
				</li>
			</ul>
		</div>
	</nav>
</div>
	

	<div class="container-fluid">

		<div class="row">
			<div class="column" style="background-color: #fff; display: grid; place-items: center;">
				<i class="iconify my-icontengah" data-icon="material-symbols:person-add-rounded"></i>
				<!-- <p>BOOKING</p> -->
				<a href="bookingform.php" style="font-size: 40px;" class="button"></span> BOOKING</a>
			</div>
			<div class="column" style="background-color: #fff; display: grid; place-items: center;">
				<i class="iconify my-icontengah" data-icon="mdi:clipboard-text-history"></i>
				<a href="history.php" style="font-size: 40px;" class="button"></span> HISTORY</a>
				<!-- <p style="font-size: 40px;">HISTORY</p> -->
			</div>
			<div class="column" style="background-color: #fff; display: grid; place-items: center;">
				<i class="iconify my-icontengah" data-icon="gridicons:refund"></i>
				<p style="font-size: 40px;">REFUND</p>
			</div>
		</div>

		<div class="row" style="display: flex; justify-content: center;">
			<div class="columnsearch" style="background-color: #DA7F8F;">
				<p class="center" style="font-size:40px;">SCHEDULE</p>
			</div>
		</div>
	</div>



	<!-- <div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h2>Welcome to Homepage </h2>
			<h4>User Info: </h4>
			<p>Name: <?php echo $row['fname']; ?></p>
			<p>email: <?php echo $row['email']; ?></p>
			<p>Password: <?php echo $row['password']; ?></p>
			<a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
		</div>
	</div>
</div> -->
</body>

</html>