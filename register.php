<?php
 
session_start();

include("connections.php");
include("functions.php");


if(isset($_POST["signup"]))
{ 
	//something was posted
    $jamb_matric_no = $_POST['jamb_matric_no'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
    echo "Please enter some valid information!";
	if(!empty($jamb_matric_no) && !empty($password) && !empty($confirm_password) && !is_numeric($jamb_matric_no))
	{
       
	    //save to database
	    $user_id = random_num(20);
		$query = "insert into register (user_id,jamb_matric_no,password,confirm_password) values ('$user_id','$jamb_matric_no','$password','$confirm_password')";

		$result=mysqli_query($con, $query);
        if($result){
        
		header("Location: login.php");
		die;
        }else{
            echo "Login Failed";
        }
	}else
	{
		echo "Please enter some valid information!";
	}
 }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>Create new account | </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="public/img/favicon.ico">

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
							<a href="/"><img src="public/img/logo.png"></a>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Create new account</h4>
                                <form method="POST" action="register.php">
			
									<div class="form-group">
										<label for="name">Jamb Reg No</label>
										<input type="num" class="form-control" id="reg no" name="jamb_matric_no" placeholder="Jamb Reg No" required="" autofocus="">
									</div>

									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="password">Password
											</label>
											<input id="password" type="password" class="form-control" placeholder="Password" name="password" required="">
										</div>
										<div class="form-group col-md-6">
											<label for="password">Confirm Password
											</label>
											<input id="password" type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="">
										</div>
									</div>


									<div class="form-group no-margin">
										<button type="submit" name="signup" class="btn btn-primary btn-block">
											Sign up
										</button>
									</div>
									
								</form>
                                <div class="text-center mt-3 small">
										Already have an account? <a href="login.php">Sign In</a>
									</div>
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
