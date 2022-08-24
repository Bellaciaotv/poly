<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "fedpolyado";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

?>

<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
	$conn= mysqli_connect('localhost', 'root', '', 'fedpolyado') or die('Connection Failed' .mysqli_connect_error());
       if(isset($_POST['surname']) && isset($_POST['firstname']) && isset($_POST['othername']) && isset($_POST['sex']) && isset($_POST['date_of_birth']) && isset($_POST['state_of_origin']) && isset($_POST['local_government']) && isset($_POST['home_town']) && isset($_POST['email']) && isset($_POST['religion']) && isset($_POST['street_address'])) {
			$surname = $_POST['surname'];
			$firstname = $_POST['firstname'];
			$othername = $_POST['othername'];
			$sex = $_POST['sex'];
			$date_of_birth = $_POST['date_of_birth'];
			$state_of_origin = $_POST['state_of_origin'];
			$local_government = $_POST['local_government'];
			$hometown = $_POST['home_town'];
			$email = $_POST['email'];
			$phone_no = $_POST['phone_no'];
			$religion = $_POST['religion'];
			$street_address = $_POST['street_address'];

           $sql= "INSERT INTO 'biodata' (surname,firstname,othername,sex,date_of_birth,state_of_origin,local_government,home_town,email,phone_no,religion,street_address) VALUES ('$surname','$firstname','$othername','$sex','$date_of_birth','$state_of_origin','$local_government','$home_town','$email','$phone_no','$religion','$street_address')";

           $query = mysqli_query($conn,$sql);
           if($query) {
               echo 'Entry Successful';
           }
           else {
               echo 'Error Occurred';
           }
       }
   }
  
?>
