<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "fedpolyado";



if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["submitbiodata"])) {
    $conn= mysqli_connect('localhost', 'root', '', 'fedpolyado') or die('Connection Failed' .mysqli_connect_error());
    {
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

        $sql= "INSERT INTO biodata (surname,firstname,othername,sex,date_of_birth,state_of_origin,local_government,home_town,email,phone_no,religion,street_address) VALUES ('$surname','$firstname','$othername','$sex','$date_of_birth','$state_of_origin','$local_government','$home_town','$email','$phone_no','$religion','$street_address')";

        $result=mysqli_query($con, $query);

        $query = mysqli_query($conn,$sql);
        if($query) {
            echo 'Entry Successful';
        }
        else {
            echo 'Error Occurred';
        }
    }
}


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["submitnok"])) {
    $conn= mysqli_connect('localhost', 'root', '', 'fedpolyado') or die('Connection Failed' .mysqli_connect_error());
    {
        $name = $_POST['next_of_kin'];
        $address = $_POST['street_address'];
        $relationship = $_POST['relationship'];
        $phone_no = $_POST['phone_no'];

        $sql= "INSERT INTO 'next of kin' (name,address,relationship,phone_no) VALUES ('$name','$address','$relationship','$phone_no')";

        $result=mysqli_query($con, $query);

        $query = mysqli_query($con,$sql);
        if($query) {
            echo 'Entry Successful';
        }
        else {
            echo 'Error Occurred';
        }
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["submitutme"])) {
    $conn= mysqli_connect('localhost', 'root', '', 'fedpolyado') or die('Connection Failed' .mysqli_connect_error());
    {
        $jamb_reg_no = $_POST['jamb_reg_no'];
        $jamb_score = $_POST['jamb_score'];
        $choice = $_POST['choice'];
        $first_subject = $_POST['first_subject'];
        $score_1 = $_POST['score_1'];
        $second_subject = $_POST['second_subject'];
        $score_2 = $_POST['score_2'];
        $third_subject = $_POST['third_subject'];
        $score_3 = $_POST['score_3'];
        $fourth_subject = $_POST['fourth_subject'];
        $score_4 = $_POST['score_4'];

        $sql= "INSERT INTO 'utme details' (jamb_reg_no,jamb_score,choice,first_subject,score_1,second_subject,score_2,third_subject,score_3,fourth_subject,score_4) VALUES ('$jamb_reg_no','$Jamb_score','$choice','$first_subject','$score_1','$second_subject','$score_2','$third_subject','$score_3','$fourth_subject','$score_4')";

        $result=mysqli_query($con, $query);

        $query = mysqli_query($conn,$sql);
        if($query) {
            echo 'Entry Successful';
        }
        else {
            echo 'Error Occurred';
        }
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["submitprogram"])) {
    $conn= mysqli_connect('localhost', 'root', '', 'fedpolyado') or die('Connection Failed' .mysqli_connect_error());
    {
        $programme = $_POST['programme'];
        $school = $_POST['school'];
        $course_of_study = $_POST['course_of_study'];


        $sql= "INSERT INTO 'academic details' ('programme,school,course_of_study') VALUES ('$programme','$school','$course_of_study')";

        $result=mysqli_query($con, $query);

        $query = mysqli_query($conn,$sql);
        if($query) {
            echo 'Entry Successful';
        }
        else {
            echo 'Error Occurred';
        }
    }
}

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



        $sql= "INSERT INTO 'olevel first sitting' ('type,exam_no,exam_year,scratch_card_pin,scratch_card_serial_no,subject_1,score_1,subject_2,score_2,subject_3,score_3,subject_4,score_4,subject_5,score_5,subject_6,score_6,subject_7,score_7,subject_8,score_8,subject_9,score_9') VALUES ('$type','$exam_no','$exam_year''$scratch_card_pin','$scratch_card_serial_no','$subject_1','$score_1','$subject_2','$score_2','$subject_3','$score_3','$subject_4','$score_4','$subject_5','$score_5','$subject_6','$score_6','$subject_7','$score_7','$subject_8','$score_8','$subject_9','$score_9')";

        $result=mysqli_query($con, $query);

        $query = mysqli_query($conn,$sql);
        if($query) {
            echo 'Entry Successful';
        }
        else {
            echo 'Error Occurred';
        }
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["submitsecondsitting"])) {
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



        $sql= "INSERT INTO 'olevel second sitting' ('type,exam_no,exam_year,scratch_card_pin,scratch_card_serial_no,subject_1,score_1,subject_2,score_2,subject_3,score_3,subject_4,score_4,subject_5,score_5,subject_6,score_6,subject_7,score_7,subject_8,score_8,subject_9,score_9') VALUES ('$type','$exam_no','$exam_year''$scratch_card_pin','$scratch_card_serial_no','$subject_1','$score_1','$subject_2','$score_2','$subject_3','$score_3','$subject_4','$score_4','$subject_5','$score_5','$subject_6','$score_6','$subject_7','$score_7','$subject_8','$score_8','$subject_9','$score_9')";

        $result=mysqli_query($con, $query);

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






