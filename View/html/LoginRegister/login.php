<?php
	//start session
	session_start();
 
	//redirect if logged in
	if(isset($_SESSION['user'])){
		header('location:home.php');
		// home.php location:../../../Controller/home.php
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="../../css/regis-login.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Julius+Sans+One&display=swap">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap">

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>
<div class="container">
	<div class="column left-column">
        <img class="image" src="../../resources/babyfeet.png" alt="Image">
        <h2 class="text welcome-text">WELCOME TO</h2>
        <h2 class="text babyxpress-text">BabyXpress</h2>
        <h2 class="text gotchu-text">Baby problems? We gotchu</h2>
        <span class="iconify icon" data-icon="fa-solid:baby-carriage" style="transform: scaleX(-1);"></span>
    </div>	
	<div class="column right-column">
		<h2 class="register">LOGIN</h2>
		<form action="../../../Controller/loginController.php" method="POST">
			<label for="register-as" class="label">Login As<span class="redtext">*</span></label>
            <br>
            <select class="registeras" id="register-as" name="register-as">
                <option value="babysitter">Babysitter</option>
                <option value="customer">Customer</option>
            </select>
			<BR>
			<label for="email" class="label">Email<span class="redtext">*</span></label>
            <input type="email" class="input" id="email" name="email" placeholder="Enter your email">
            <br>
			<label for="password" class="label">Password<span class="redtext">*</span></label>
            <input type="password" class="input" id="password" name="password" placeholder="Enter your password">
            <br>
			<label for="Remember-Me">
					<input type="checkbox" id="Remember-Me">
					<span>Remember Me</span>
			</label>
			<br>
			<div class="centerbutton">
				<button onclick="window.location.href = 'home.php';" name="login" type="submit" class="button">LOGIN</button>
			</div>
		</form>
	</div>
</div>
</body>
</html>