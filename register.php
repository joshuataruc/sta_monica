<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sta Monica</title>
	<link rel="icon" href="image/Concepcion_Tarlac.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<style type="text/css">
		
		.card{
			width: 60vw;
			margin-left: auto;
			margin-right: auto;
			display: block;
		}
		/*#submit-btn:hover{
			cursor: not-allowed;
			}*/
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
				<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 muncity">
					<p>REPUBLIC OF THE PHILIPPINES</p>
					<h3>MUNICIPALITY OF CONCEPCION <br> PROVINCE OF TARLAC</h3>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
					<h3 class="brgy">BARANGAY STA. MONICA</h3>
				</div>
				<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
					<img src="image/Concepcion_Tarlac.png">
				</div>
			</div>
			<div class="menu row">
				<a href="announcements.php">ANNOUNCEMENT</a>
				<a href="appointments.php">APPOINTMENTS</a>
				<a href="about_us.php">ABOUT US</a>
				<a href="register.php">REGISTER</a>
			</div>
			<br>
			<div class="card input-card">
				<div class="card-body">
					<?php if (isset($_SESSION['flash'])) { ?>
					 	<h3 class="text-danger"><?php echo $_SESSION['flash']; ?></h3>
					 	<?php unset($_SESSION['flash']) ?>
					<?php } ?>
					<?php if (isset($_SESSION['flash_success'])) { ?>
					 	<h3 class="text-success"><?php echo $_SESSION['flash_success']; ?></h3>
					 	<?php unset($_SESSION['flash_success']) ?>
					<?php } ?>
					<form action="user_acc/pending_user.php" method="post">
						<div class="row">
							<div class="form-group col-md-4">
								<label>First Name</label>
								<input type="text" name="fname" class="form-control" required>
							</div>
							<div class="form-group col-md-4">
								<label>Middle Name</label>
								<input type="text" name="midname" class="form-control">
							</div>
							<div class="form-group col-md-4">
								<label>Last Name</label>
								<input type="text" name="lname" class="form-control" required>
							</div>
							<div class="form-group col-md-12">
								<label>Username</label>
								<input type="text" name="username" class="form-control" required>
							</div>
							<div class="form-group col-md-6">
								<label>Date of Birth</label>
								<input type="date" name="dob" id="appoint_name" class="form-control" required="">
							</div>
							<div class="form-group col-md-6">
								<label>Contact Number</label>
								<input type="text" name="cont_num" class="form-control phone" required onkeypress='validate(event)' onpaste="return false;" maxlength="11">
							</div>
							<div class="form-group col-md-12">
								<label>Purok / Sitio</label>
								<textarea rows="2" class="form-control" name="address" ></textarea>
							</div>
							<div class="form-group col-md-6" >
								<label>Password</label>
								<input type="password" name="password" id="password" class="form-control" required><br>
								<label id="pass-message"></label>
							</div>
							<div class="form-group col-md-6">
								<label>Confirm Password</label>
								<input type="password" name="password" id="con-password" class="form-control" required><br>
								<input type="submit" id="submit-btn" name="login" value="Register" class="float-right btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<br>
		<script src="js/jquery.min.js"></script>
		<script src="js/confirm_password.js"></script>
		<script src="js/number_only_input.js"></script>
		<script type="text/javascript">
			var today = new Date().toISOString().split('T')[0];
			document.getElementsByName("dob")[0].setAttribute('max', today);
			$(window).scroll(function() {    
				var scroll = $(window).scrollTop();

				if (scroll >= 50) {
					$("nav").addClass("white");
				} else {
					$("nav").removeClass("white");
				}
			});
		</script>
	</body>
	<footer>
		<div class="container-fluid">
			<div class="row ">
				<div class="col-md-12"><h2>QUICKS LINKS</h2></div>
				<div class="col-md-5ths"><a href="index.php">HOME</a></div>
				<div class="col-md-5ths"><a href="Announcements.php">ANNOUNCEMENT</a></div>
				<div class="col-md-5ths"><a href="appointments.php">APPOINTMENTS</a></div>
				<div class="col-md-5ths"><a href="about_us.php">ABOUT US</a></div>
				<div class="col-md-5ths"><a href="register.php">REGISTER</a></div>
				<div class="col-sm-12 col-md-12 col-lg-12"><p>© 2020 Copyright: Barangay Sta. Monica</p></div>
			</div>
		</div>
	</footer>
	</html>