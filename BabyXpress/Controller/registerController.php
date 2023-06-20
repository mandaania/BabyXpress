<?php
	session_start();
	// require_once '../Model/LoginRegister/User.php';
    // user.php
    // ../Model/LoginRegister/User.php
    require_once 'DbConnection.php';

    $connection = new mysqli("localhost", "root", "", "dbbabyxpress");

// Periksa apakah terjadi kesalahan dalam koneksi
if ($connection->connect_error) {
    die("Koneksi gagal: " . $connection->connect_error);
}
// $escaped_string = $connection->real_escape_string($unescaped_string);

	if($_SERVER['REQUEST_METHOD'] == "POST"){
        $role = $_POST['role'];
        $email = addslashes($connection->real_escape_string($_POST['email']));
        $password = $_POST['password'];
        // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $confirmedPassword = $_POST['confirmedPassword'];
        
        // Check username duplication
        $check = $connection->query("SELECT id FROM `user` where `email` = '{$email}'")->num_rows;
        if($check > 0){
            $err = "Username is already taken!";
        }else{
            if($password !== $confirmedPassword){
                $err = "Password confirmation does not match!";
            }else{
                $fullname = $_POST['fullname'];
                if(empty($fullname)){
                    $err = "Full name is required!";
                }else{
                    $phonenumber = $_POST['phonenumber'];
                    $dob = $_POST['dob'];
                    $city = $_POST['city'];
                    $province = $_POST['province'];
                    $postalcode = $_POST['postalcode'];
                    $address = $_POST['address'];
                    $sql = "INSERT INTO `user` (`role`, `email`,`password`, `name`, `phone_number`, `date_of_birth`, `city`, `province`, `postal_code`, `full_address`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = $connection->prepare($sql);
                    $stmt->bind_param("ssssssssss", $role, $email, $password, $fullname, $phonenumber, $dob, $city, $province, $postalcode, $address);
                    $stmt->execute();
                    
                    
                    if($stmt->affected_rows > 0){
                        $success = "Account has been created succesfully. <a href='login.php'>Login Now!</a>";
                        $_SESSION['success_msg'] = $success;
                        if($role && $role=="Customer"){    
                            header('location: register.php');
                            unset($_POST);
                            exit;
    
                        }else if($role && $role=="Babysitter"){
                            header("Location: registerasBS.php");
                            unset($_POST);
                            exit;
                        }
                    }else{
                        $err = "Creating your account has been failed for some reason!";
                    }
                }
            }
        }
    }
    $connection->close();
    // $connection->close();
?> 
