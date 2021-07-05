<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
 	<link rel="icon" href="image/Concepcion_Tarlac.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<style type="text/css">
		
		.card{
			margin-right: auto;
			margin-left: auto;
			display: block;
			width: 40vw !important;
		}
	</style>
</head>
<body>
<nav>
		<input type="checkbox" name="" id="check">
		<label for="check" class="checkbtn">
			<i class="fas fa-bars"></i>
		</label> 
		<ul>
			<li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
			<li><a href="login.php">Admin Login</a></li>

		</ul>
	</nav>
	<div class="container-fluid">
		<div class="sta-monica row">
			<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
				<img src="image/CPCN logo.png">
			</div>
			<div class="col-md-5 col-lg-5 col-sm-12 col-xs-12 muncity">
				<p>REPUBLIC OF THE PHILIPPINES</p>
				<h2>MUNICIPALITY OF CONCEPCION <br> PROVINCE OF TARLAC</h2>
			</div>
			<div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
				<h2 class="brgy">BARANGAY STA. MONICA</h2>
			</div>
		</div>
		<div class="menu row">
			<a href="announcements.php">ANNOUNCEMENT</a>
			<a href="appointments.php">APPOINTMENTS</a>
			<a href="about_us.php">ABOUT US</a>
			<a href="register.php">REGISTER</a>
		</div>
		<br>
		<div class="card login-card">
			<div class="card-body">
				<form action="auth.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control"><br>
						<input type="submit" name="login" value="Login" class="float-right btn btn-primary">
						<br>
					</div>
				</form>
			</div>
		</div>
	</div>
	<br>
</body>
<script src="js/jquery.min.js"></script>
	<script>
		$(window).scroll(function() {    
			var scroll = $(window).scrollTop();

			if (scroll >= 50) {
				$("nav").addClass("white");
			} else {
				$("nav").removeClass("white");
			}
		});


	</script>
<footer>
	<div class="container-fluid">
		<div class="row ">
			<div class="col-md-12"><h2>QUICKS LINKS</h2></div>
			<div class="col-md-5ths"><a href="">HOME</a></div>
			<div class="col-md-5ths"><a href="">ANNOUNCEMENT</a></div>
			<div class="col-md-5ths"><a href="">APPOINTMENTS</a></div>
			<div class="col-md-5ths"><a href="about_us.php">ABOUT US</a></div>
			<div class="col-md-5ths"><a href="">REGISTER</a></div>
			<div class="col-sm-12 col-md-12 col-lg-12"><p>© 2020 Copyright: Barangay Sta. Monica</p></div>
		</div>
	</div>
</footer>
</html>