<?php

include "../../../Controller/dbconnection.php";
// dbconnection.php
require_once("../../../Controller/registerController.php");
// registerController.php
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
    </style>
    <link rel="stylesheet" type="text/css" href="../../css/regis-login.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Julius+Sans+One&display=swap">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap">
     
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
            <h2 class="register">REGISTER</h2>
            <form id="registration-form" action="" method="POST">
                <label for="email" class="label">Email<span class="redtext">*</span></label>
                <input type="email" class="input" id="email" name="email" placeholder="Enter your email">
                <br>    
                <label for="password" class="label">Password<span class="redtext">*</span></label>
                <input type="password" class="input" id="password" name="password" placeholder="Enter your password">
                <br>
                <label for="confirmedPassword" class="label">Confirm Password<span class="redtext">*</span></label>
                <input type="password" class="input" id="confirmedPassword" name="confirmedPassword" placeholder="Confirm your password">
                <br>
                <label for="fullname" class="label">Full Name<span class="redtext">*</span></label>
                <input type="text" class="input" id="fullname" name="fullname" placeholder="Ex: John Doe">
                <br>    
                <label for="phonenumber" class="label">Phone Number<span class="redtext">*</span></label>
                <input type="tel" class="input" id="phonenumber" name="phonenumber" placeholder="Ex: 0812xxxxxxxx">
                <label for="dob" class="label">Date of Birth<span class="redtext">*</span></label>
                <input type="date" class="input" id="dob" name="dob" placeholder="dd/mm/yyyy">
                <br>
                <label for="province" class="label">Province<span class="redtext">*</span></label>
                <input type="text" class="input" id="province" name="province" placeholder="Ex: DKI Jakarta">    
                <label for="city" class="label">City<span class="redtext">*</span></label>
                <input type="text" class="input" id="city" name="city" placeholder="Ex: West Jakarta">
                <br>
                <label for="postalcode" class="label">Postal Code<span class="redtext">*</span></label>
                <input type="text" class="input" id="postalcode" name="postalcode" placeholder="Ex: 11530">    
                <br>
                <label for="address" class="label">Full Address<span class="redtext">*</span></label>
                <input type="text" class="input" id="address" name="address" placeholder="Ex: Binus University, Kampus Anggrek. Jakarta Barat, 11530">
                <label for="register-as" class="label">Register As<span class="redtext">*</span></label>
                <select class="registeras" id="role" name="role">
                    <option value="Babysitter">Babysitter</option>
                    <option value="Customer">Customer</option>
                </select>
                <?php if(isset($_SESSION['success_msg']) && !empty($_SESSION['success_msg'])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success_msg'] ?>
                </div>
                <?php unset($_SESSION['success_msg']); ?>
                <?php else: ?>
                <p class="text-center">
                    <a href="login.php">Already have an account? Login here</a>
                </p>
                <?php endif; ?>
                <?php if(isset($err) && !empty($err)): ?>
                <div class="alert alert-danger">
                    <?= $err ?>
                </div>
                <?php endif; ?>
                <br>
                <div class="centerbutton">
                    <button onclick="window.location.href = 'registerController.php';" class="button">NEXT</button>
                </div>
            </form>
            


            <!-- <button onclick="window.location.href = 'file_lain.html';">Klik Saya</button> -->


        </div>
    </div>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</body>
</html>
                        
