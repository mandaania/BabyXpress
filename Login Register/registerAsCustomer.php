<!DOCTYPE html>
<html>
  <head>
    <title>RegisterAsCustomer Form</title>
    <link rel="stylesheet" type="text/css" href="regis-login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

  </head>
  <body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6" style="background-color: #DA7F8F;">
				<i class="iconify" data-icon="icon-park-solid:baby-feet"></i>
				<div class="left-text">
					<p>WELCOME TO</p>
					<h1>BabyXpress</h1>
					<h6>Baby problems? We gotchu</h6>
				</div>
				<i class="iconify" data-icon="mdi:baby-carriage"></i>

			</div>
			<div class="col-sm-6" style="background-color: #fff;">
				<h2>REGISTER</h2>
				<h6>As Customer</h6>
				
				<form action="loginController.php" method="POST">
					<div class="form-group">
						<label for="full-name">Full Name<span class="red-text">*</span></label>
						<input type="text" class="form-control" name="full-name" id="full-name" placeholder="Ex: John Doe">							
					</div>
					<div class="form-group">
						<label for="phone-number">Phone Number<span class="red-text">*</span></label>
						<input type="text" class="form-control" name="phone-number" id="phone-number" placeholder="Ex: 0812xxxxxxxx">
					</div>
					<div class="form-group">
						<label for="dob">Date of Birth<span class="red-text">*</span></label>
						<input type="text" class="form-control" name="dob" id="dob" placeholder="dd/mm/yyyy">
					</div>
					<div class="form-group">
						<label for="city">Province<span class="red-text">*</span></label><br>
						<select class="form-select" aria-label="province">
							<option value="1">DKI Jakarta</option>
							<option value="2">Bandung</option>
						</select>
					</div>
					<div class="form-group">
						<label for="city">City<span class="red-text">*</span></label><br>
						<select class="form-select" aria-label="city">
							<option value="1">West Jakarta</option>
							<option value="2">North Jakarta</option>
						</select>
					</div>
					<div class="form-group">
						<label for="postal-code">Postal Code<span class="red-text">*</span></label>
						<input type="text" class="form-control" name="postal-code" id="postal-code" placeholder="Ex: 11530">
					</div>
					<div class="form-group">
						<label for="full-address">Full Address<span class="red-text">*</span></label>
						<input type="text" class="form-control" name="full-address" id="full-address" placeholder="Ex: Binus University, Kampus Anggrek. Jakarta Barat, 11530
">
					</div>
					<a href="login.php" class="btn btn-primary btn-block">REGISTER</button>
				</form>
			</div>
		</div>
	</div>
  </body>
  

</html>