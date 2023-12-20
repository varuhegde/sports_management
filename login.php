
<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="log/css/style.css">
	<script src="log/js/jquery.min.js"></script>
  <script src="log/js/popper.js"></script>
  <script src="log/js/bootstrap.min.js"></script>
  <script src="log/js/main.js"></script>
    <style type="text/css">
<!--
.style1 {color: #F0F0F0}
.style5 {color: #000000}
-->
    </style>
  </head>
	<body class="img js-fullheight style1" style="background-image: url(log/images/bgm.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="logcheck.php" method="post" class="signin-form">
		      		<div class="form-group">
		      			<input name="username" type="text" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input name="password" id="password-field" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            
	            <div class="form-group">
	            	<button type="submit" class="btn form-control submit px-8 "  >Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	
								</div>
								<div class="w-50 text-md-right">
									<a href="forgot.php">Forgot Password</a>
								</div>
	            </div>
	          </form>
	          
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>



	</body>
</html>

