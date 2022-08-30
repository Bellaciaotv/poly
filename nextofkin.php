<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "fedpolyado";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["submitnok"])) {
    $conn= mysqli_connect('localhost', 'root', '', 'fedpolyado') or die('Connection Failed' .mysqli_connect_error());
    {
        $name = $_POST['next_of_kin'];
        $address = $_POST['street_address'];
        $relationship = $_POST['relationship'];
        $phone_no = $_POST['phone_no'];

        $sql= "INSERT INTO next_of_kin (name,address,relationship,phone_no) VALUES ('$name','$address','$relationship','$phone_no')";

        $query = mysqli_query($con,$sql);
        if($query) {
            echo 'Entry Successful';
        }
        else {
            echo 'Error Occurred';
        }
    }
}
?>