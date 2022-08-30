<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "fedpolyado";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["submitbiodata"])) {
    echo "yes";
        $surname = $_POST['surname'];
        $firstname = $_POST['firstname'];
        $othername = $_POST['othername'];
        $sex = $_POST['sex'];
        $date_of_birth = $_POST['date_of_birth'];
        $state_of_origin = $_POST['state_of_origin'];
        $local_government = $_POST['local_government'];
        $home_town = $_POST['home_town'];
        $email = $_POST['email'];
        $phone_no = $_POST['phone_no'];
        $religion = $_POST['religion'];
        $street_address = $_POST['street_address'];

        $sql= "INSERT INTO biodata (surname,firstname,othername,sex,date_of_birth,state_of_origin,local_government,home_town,email,phone_no,religion,street_address) VALUES ('$surname','$firstname','$othername','$sex','$date_of_birth','$state_of_origin','$local_government','$home_town','$email','$phone_no','$religion','$street_address')";
        
        $query = mysqli_query($con,$sql);
        if($query) {
            echo 'Entry Successful';
        }
        else {
            echo 'Error Occurred';
        }
    
}

?>