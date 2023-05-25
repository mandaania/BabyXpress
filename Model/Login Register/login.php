<!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
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
				  <div class="icon2">
					  <img src="babyfeet.png" class="img-fluid">
				  </div>				
				  
          <div class="left-text">
					  <p>WELCOME TO</p>
					  <h1>BabyXpress</h1>
					  <h6>Baby problems? We gotchu</h6>
				  </div>
				  <i class="iconify" data-icon="mdi:baby-carriage"></i>
			  </div>

			  <div class="col-sm-6" style="background-color: #fff;">
				  <h2>Login</h2>	
				  <form action="loginController.php" method="POST">
					<p>Login As<span class="red-text">*</span></p>
					
          <select class="form-select" aria-label="Login As">
						<option value="1">Customer</option>
						<option value="2">Babysitter</option>
					</select>

					<div class="form-group">
						<label for="email">Email<span class="red-text">*</span></label>
						<input type="text" class="form-control" name="email" id="email" placeholder="Enter your email">							
					</div>
					<div class="form-group">
						<label for="password">Password<span class="red-text">*</span></label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
					</div>
					<label for="Remember-Me">
						<input type="checkbox" id="Remember-Me">
						<span>Remember Me</span>
					</label>
					<button type="submit" class="btn btn-primary btn-block">LOGIN</button>
				</form>
			</div>
		</div>
	</div>
  </body>
</html>
