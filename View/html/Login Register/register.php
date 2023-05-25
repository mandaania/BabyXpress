<!DOCTYPE html>
<html>
  <head>
    <title>Register Form</title>
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
				
				<form action="registerController.php" method="POST">
					<div class="form-group">
						<label for="username">Username<span class="red-text">*</span></label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Ex: harrypotter123">							
						</div>
						<div class="form-group">
							<label for="password">Password<span class="red-text">*</span></label>
							<input type="password" class="form-control" name="password" id="password" placeholder="With letters, numbers, and symbols">
						</div>
						<div class="form-group">
							<label for="confirmed-password">Confirmed Password<span class="red-text">*</span></label>
							<input type="confirmed-password" class="form-control" name="confirmed-password" id="confirmed-password" placeholder="Confirm your password">
						</div>
						<p>Register As</p>
						<select class="form-select" aria-label="Register As">
							<option value="1">Customer</option>
							<option value="2">Babysitter</option>
						</select>
					<a href="registerAsCustomer.php" class="btn btn-primary btn-block">NEXT</button>
				</form>
			</div>
		</div>
	</div>
  </body>
  

</html>
