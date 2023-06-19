<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../../../css/Settings/Babysitter/Password/settings-pw-b.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Settings Password</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        <!-- <iconify-icon icon="material-symbols:arrow-back-ios-new-rounded"></iconify-icon> -->
        
        <style>
            html, body {
                height: 100%;
                margin: 0;
            }

            .container-fluid {
                height: 100%;
                display: flex;
                flex-direction: column;
            }

            .row {
                flex: 1;
            }
            
            .no-padding {
              padding: 0;
            }
        </style>
    </head>

    <body>
        <div class = "container-fluid">
            <div class="row">
                <!-- Settings Navigation Column -->
                <div class = "col-sm-3 no-padding">
                    <div class = "colContent-s">
                        <!-- <button class="back-button" onclick="window.history.back()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M15.125 21.1L6.7 12.7q-.15-.15-.213-.325T6.425 12q0-.2.062-.375T6.7 11.3l8.425-8.425q.35-.35.875-.35t.9.375q.375.375.375.875t-.375.875L9.55 12l7.35 7.35q.35.35.35.863t-.375.887q-.375.375-.875.375t-.875-.375Z"/>
                            </svg>
                        </button> -->
                        
                        <div>
                            <iconify-icon icon="material-symbols:arrow-back-ios-new-rounded" style="float: left; margin: 0px; margin-top:13px; font-size:30px"></iconify-icon>
                            <h1 style="padding-left:20px; margin: 0px 0px 10px 20px;">Settings</h1>
                        </div>
                        <ul class="li-content">
                            <li><a href = "profile-acc.php" class = "li-content">Account Settings</a></li>
                            <li class="current-setting"><a href = "profile-pw.php" class = "li-content">Password</a></li>
                            <li><a href = "registerAsCustomer.php" class = "li-content">Security</a></li>
                            <li><a href = "registerAsCustomer.php" class = "li-content">Notification</a></li>
                            <li><a href = "registerAsCustomer.php" class = "li-content">Support</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Isi Settings bagian Password -->
                <div class="col-sm-9 no-padding">
                    <div class = "colContent-p">
                        <h2>Password</h2>

                        <form action="loginController.php" method="POST">
                            <div class="form-group">
                                <label for="password">Current Password<span class="red-text">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your current password">
                            </div>
                            
                            <a href="registerAsCustomer.php">Forgot Password?</a>

                            <div class="form-group">
                                <label for="new-pass">New Password<span class="red-text">*</span></label>
                                <input type="password" class="form-control" name="new-pass" id="new-pass" placeholder="Ex: Potter233">
                            </div>
                            <div class="form-group">
                                <label for="confirm-pass">Confirm Password<span class="red-text">*</span></label>
                                <input type="password" class="form-control" name="confirm-pass" id="confirm-pass" placeholder="Ex: Potter233">
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">SAVE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>