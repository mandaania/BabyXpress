<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../../../css/Settings/Customer/Account/settings-acc-c.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Settings Account Profile</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
                        <div>
                            <iconify-icon icon="material-symbols:arrow-back-ios-new-rounded" style="float: left; margin: 0px; margin-top:13px; font-size:30px"></iconify-icon>
                            <h1 style="padding-left:20px; margin: 0px 0px 10px 20px;">Settings</h1>
                        </div>
                        <ul class="li-content">
                            <li class="current-setting"><a href = "profile-acc.php" class = "li-content">Account Settings</a></li>
                            <li><a href = "profile-pw.php" class = "li-content">Password</a></li>
                            <li><a href = "registerAsCustomer.php" class = "li-content">Security</a></li>
                            <li><a href = "registerAsCustomer.php" class = "li-content">Notification</a></li>
                            <li><a href = "registerAsCustomer.php" class = "li-content">Support</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Isi Settings bagian Account -->
                <div class="col-sm-9 no-padding">
                    <div class = "colContent-a">
                        <h2>Profile</h2>

                        <form action="loginController.php" method="POST">
                            <!-- profile picture -->
                            <div id="profile-picture" style="width: 65px; height: 65px; border-radius: 50%; text-align: center; background-color:#A7BBC7; background-repeat: no-repeat; background-position: center; background-size: cover;">
                                <img id="profileImage" src="../../../../resources/Default_pfp.svg.png" style="text-align: center; min-width: 60px; max-width: 60px; min-height: 60px; max-height: 60px; padding: top 2px;"/>
                            </div>
                            <!-- <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" required="" capture> -->
                            <button type="submit" class="change-profile">Change Profile</button>

                            <!-- first name -->
                            <div class="form-group">
                                <label for="fName">First Name<span class="red-text">*</span></label>
                                <input type="text" class="form-control" name="fName" id="fName" placeholder="Ex: Harry">
                            </div>

                            <!-- last name -->
                            <div class="form-group">
                                <label for="lName">Last Name<span class="red-text">*</span></label>
                                <input type="text" class="form-control" name="lName" id="lName" placeholder="Ex: Potter">
                            </div>

                            <!-- phone number -->
                            <div class="form-group">
                                <label for="phone">Phone Number<span class="red-text">*</span></label>
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Ex: 0812xxxxxxxxx">
                            </div>

                            <!-- date of birth -->
                            <div class="form-group">
                                <label for="dob">Date of Birth<span class="red-text">*</span></label>
                                <input type="text" class="form-control" name="dob" id="dob" placeholder="dd/mm/yyyy">
                            </div>

                            <!-- city -->
                            <div class="form-group">
                                <label for="city">City<span class="red-text">*</span></label>
                                <select id="city" name="city">
                                    <option value="city1">West Jakarta</option>
                                </select>
                            </div>

                            <!-- province -->
                            <div class="form-group">
                                <label for="province">Province<span class="red-text">*</span></label>
                                <select id="province" name="province">
                                    <option value="province1">DKI Jakarta</option>
                                </select>
                            </div>

                            <!-- postal code -->
                            <div class="form-group">
                                <label for="postal">Postal Code<span class="red-text">*</span></label>
                                <input type="text" class="form-control" name="postal" id="postal" placeholder="Ex: 11530">
                            </div>

                            <!-- full address -->
                            <div class="form-group">
                                <label for="address">Full Address Number<span class="red-text">*</span></label>
                                <textarea id="address" class="form-control" name="address" placeholder="Ex: Binus University, Kampus Anggrek. Jakarta Barat, 11530"></textarea>
                            </div>

                            <button type="submit" class="save-info">SAVE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<!-- function goBack() {
    window.history.back();
} -->