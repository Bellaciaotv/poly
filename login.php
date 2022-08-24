<?php

session_start();

	include("connections.php");
	include("functions.php");


	if(isset($_POST["signin"]))
	{
		//something was posted
		$jamb_matric_no = $_POST['jamb_matric_no'];
		$pass = $_POST['password'];


			//read from database
			 $query = "select * from register where jamb_matric_no = '$jamb_matric_no' and password = '$pass'";
			$result = mysqli_query($con, $query);

				if($result && mysqli_num_rows($result))
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] != $pass)
					{
						echo "Wrong Matric No or password!";
						header("Location: index.php?error= Access Denied");
						die;
					}else{
						echo "Wrong Matric No!";
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: blank.php");
					}
				}else{
					echo "Wrong Matric No or password!";
				}
			
			
		
	}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>Login | FedPolyLogin</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="public/img/logo.png">

    <!-- Template -->
    <link rel="stylesheet" href="public/graindashboard/css/graindashboard.css">
  </head>

  <body class="">

    <main class="main">

      <div class="content">

			<div class="container-fluid pb-5">

				<div class="row justify-content-md-center">
					<div class="card-wrapper col-12 col-md-4 mt-5">
						<div class="brand text-center mb-3">
							<a href="#"><img src="public/img/logo.png"></a>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Login</h4>
								<form method="POST" action="">
									<div class="form-group">
										<label for="num">Jamb Reg No/Matric No</label>
										<input id="num" type="text" class="form-control" placeholder='Jamb Reg No/Matric No' name="jamb_matric_no" required="" autofocus="">
									</div>

									<div class="form-group">
										<label for="password">Password
										</label>
										<input id="password" type="password" placeholder="password" class="form-control" name="password" required=>
										<div class="text-right">
											<a href="password-reset.html" class="small">
												Forgot Your Password?
											</a>
										</div>
									</div>

									<div class="form-group">
										<div class="form-check position-relative mb-2">
										  <input type="checkbox" class="form-check-input d-none" id="remember" name="remember">
										  <label class="checkbox checkbox-xxs form-check-label ml-1" for="remember"
												 data-icon="&#xe936">Remember Me</label>
										</div>
									</div>

									<div class="form-group no-margin">
										<button type="submit" class="btn btn-primary btn-block">
											Sign In
										</button>
									</div>
									<div class="text-center mt-3 small">
										Fresh Man or New Student <a href="register.php">Sign Up</a>
									</div>
								</form>
							</div>
						</div>
						<footer class="footer mt-3">
							<div class="container-fluid">
								<div class="footer-content text-center small">
									<span class="text-muted">&copy; 2022 The Federal Polytechnic, Ado-Ekiti. All Rights Reserved.</span>
								</div>
							</div>
						</footer>
					</div>
				</div>



			</div>

      </div>
    </main>

	<script src="public/graindashboard/js/graindashboard.js"></script>
    <script src="public/graindashboard/js/graindashboard.vendor.js"></script>
  </body>
</html>
