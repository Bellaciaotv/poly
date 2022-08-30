<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "fedpolyado";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["submitfirstsitting"])) {
    $conn= mysqli_connect('localhost', 'root', '', 'fedpolyado') or die('Connection Failed' .mysqli_connect_error());
    {
        $type = $_POST['type'];
        $exam_no = $_POST['exam_no'];
        $exam_year = $_POST['exam_year'];
        $scratch_card_pin = $_POST['scratch_card_pin'];
        $scratch_card_serial_no= $_POST['scratch_card_serial_no'];
        $subject_1 = $_POST['subject_1'];
        $grade_1 = $_POST['grade_1'];
        $subject_2 = $_POST['subject_2'];
        $grade_2 = $_POST['grade_2'];
        $subject_3 = $_POST['subject_3'];
        $grade_3 = $_POST['grade_3'];
        $subject_4 = $_POST['subject_4'];
        $grade_4 = $_POST['grade_4'];
        $subject_5 = $_POST['subject_5'];
        $grade_5 = $_POST['grade_5'];
        $subject_6 = $_POST['subject_6'];
        $grade_6 = $_POST['grade_6'];
        $subject_7 = $_POST['subject_7'];
        $grade_7 = $_POST['grade_7'];
        $subject_8 = $_POST['subject_8'];
        $grade_8 = $_POST['grade_8'];
        $subject_9 = $_POST['subject_9'];
        $grade_9 = $_POST['grade_9'];


        $sql= "INSERT INTO olevel_first_sitting (type,exam_no,exam_year,scratch_card_pin,scratch_card_serial_no,subject_1,grade_1,subject_2,grade_2,subject_3,grade_3,subject_4,grade_4,subject_5,grade_5,subject_6,grade_6,subject_7,grade_7,subject_8,grade_8,subject_9,grade_9) VALUES ('$type','$exam_no','$exam_year''$scratch_card_pin','$scratch_card_serial_no','$subject_1','$grade_1','$subject_2','$grade_2','$subject_3','$grade_3','$subject_4','$grade_4','$subject_5','$grade_5','$subject_6','$grade_6','$subject_7','$grade_7','$subject_8','$grade_8','$subject_9','$grade_9')";

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