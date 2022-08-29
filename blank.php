<?php

session_start();

include("connections.php");
include("functions.php");

error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;

	$db = mysqli_connect("localhost", "root", "", "fedpolyado");

	// Get all the submitted data from the form
	$sql = "INSERT INTO image (filename) VALUES ('$filename')";
	
	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>



<?php
include "header.php";
?>
<link rel="stylesheet" href="javascript/bootstrap.js">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <div class="content">
        <div class="py-4 px-3 px-md-4">
			  <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="row">
                        <div class="col-md-12">
                        <h3>Welcome to your Dashboard</h3>
                            
                            <form class="form-horizontal">
                           
                                                            
                                <div class="panel panel-default tabs">  
								
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-link d-flex align-items-center py-2 px-3 active"><a href="#tab-first" role="tab" data-toggle="tab">Bio Data</a></li>
                                        <li class="nav-link d-flex align-items-center py-2 px-3"><a href="#tab-second" role="tab" data-toggle="tab">Next Of Kin</a></li>
                                        <li class="nav-link d-flex align-items-center py-2 px-3"><a href="#tab-third" role="tab" data-toggle="tab">UTME Details</a></li>
                                        <li class="nav-link d-flex align-items-center py-2 px-3"><a href="#tab-fourth" role="tab" data-toggle="tab">Academic Details</a></li>
                                        <li class="nav-link d-flex align-items-center py-2 px-3"><a href="#tab-fifth" role="tab" data-toggle="tab">O'level Details</a></li>
                                        <li class="nav-link d-flex align-items-center py-2 px-3"><a href="#tab-sixth" role="tab" data-toggle="tab">Passport</a></li>
                                        <li class="nav-link d-flex align-items-center py-2 px-3"><a href="#tab-seventh" role="tab" data-toggle="tab">Print</a></li>
                                    </ul>
									
									
                                    <!-- tab first content -->
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab-first">
                                        <form action="connections.php" method="post">
                                           <!-- Bio data -->
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">SURNAME</label>
                                                <div class="col-md-6 col-xs-12">                                                                                                                                                        
                                                    <input type="text" class="form-control" name="surname" placeholder="Adeyemi" required/>                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">FIRST NAME</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" class="form-control" name="firstname" placeholder="Esther" required/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">OTHER NAME</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" class="form-control" name="othername" placeholder="Ada"/>
                                                </div>
                                            </div>

                                            <div class="form-group">                                        
                                                <label class="col-md-3 col-xs-12 control-label">SEX</label>
                                                <div class="col-md-6">
                                                    <select class="form-control select" name="sex" required>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Other</option>                                                      
                                                    </select>   
                                                </div>        
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">DATE OF BIRTH</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="datetime-local" id="date of birth" name="date_of_birth" class="form-control" placeholder="Date of Birth" required/>
                                                </div>
                                            </div>                                           

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">STATE OF ORIGIN</label>
                                                <div class="col-md-6 col-xs-12">     
                                                <select class="form-control select" name="state_of_origin" required>
                                                        <option>Abia</option>
                                                        <option>Adamawa</option>
                                                        <option>Akwa Ibom</option>
                                                        <option>Anambra</option>
                                                        <option>Bauchi</option>
                                                        <option>Bayelsa</option>
                                                        <option>Benue</option>
                                                        <option>Bornu</option>
                                                        <option>Cross River</option>
                                                        <option>Ebonyi</option>
                                                        <option>Edo</option>
                                                        <option>Ekiti</option>
                                                        <option>Enugu</option>
                                                        <option>Gombe</option>
                                                        <option>Imo</option>
                                                        <option>Jigawa</option>
                                                        <option>Kaduna</option>
                                                        <option>Kano</option>
                                                        <option>Kastina</option>
                                                        <option>Kebbi</option>
                                                        <option>Kogi</option>
                                                        <option>Kwara</option>
                                                        <option>Nasarawa</option>
                                                        <option>Niger</option>
                                                        <option>Ogun</option>
                                                        <option>Ondo</option>
                                                        <option>Osun</option>
                                                        <option>Oyo</option>  
                                                        <option>Plateau</option>
                                                        <option>Rivers</option>
                                                        <option>Sokoto</option>
                                                        <option>Taraba</option>
                                                        <option>Yobe</option>
                                                        <option>Zamfara</option>
                                                        <option>FCT</option>                                                  
                                                    </select>
                                                </div>
                                            </div>  
                                            
                                        <div class="form-group">
                                                <label class="col-md-6 col-xs-12 control-label">LOCAL GOVERNMENT</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                <select class="form-control select" name="local_government" required>
                                                    <option>Ikole-Ekiti</option>
                                                    <option>Osun-west</option>
                                                    <option>Ikare-Akoko</option>
                                                    <option>Abuja</option>
                                                    <option>Kabba</option>
                                                </select>
                                                </div>
                                        </div> 
                                            
                                        <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">HOME TOWN</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" id="home town" name="home_town" class="form-control" placeholder="Home Town" required/>
                                                </div>
                                            </div>  

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">MOBILE PHONE</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="tel" id="phone" name="phone_no" placeholder="08104175959" pattern="[0-9]{11}" class="form-control" required/>
                                                </div>
                                            </div>  

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">EMAIL</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="email" id="email" name="email" class="form-control" placeholder="joel@example.com" required/>
                                                </div>
                                            </div>  

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">RELIGION</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                <select class="form-control select" name="religion" required>
                                                    <option>Christianity</option>
                                                    <option>Muslim</option>
                                                    <option>Other</option>
                                                </select>
                                                </div>
                                            </div>  

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">STREET ADDRESS</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" id="street address" name="street_address" class="form-control" placeholder="25 Alan Street" required/>
                                                </div>
                                            </div>
                                        
                                            <div class="panel-footer">                                                                        
                                                 <button class="btn btn-primary pull-right" name="submitbiodata">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
                                            </div>
                                            
                                            </form>
                                        </div>   


                                        <!-- tab second content -->
                                        <div class="tab-pane" id="tab-second">
                                        <form action="connections.php" method="post">
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">NEXT OF KIN</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" id="name" name="next_of_kin" class="form-control" placeholder="Adeyemi David Chiemele" required/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-6 col-xs-12 control-label">NEXT OF KIN'S ADDRESS</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" id="street address" name="street_address" class="form-control" placeholder="25 Alan Street" required/>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">RELATIONSHIP</label>
                                                <div class="col-md-6 col-xs-12">                                                                                                                                                        
                                                <select class="form-control select" name="relationship" required>
                                                    <option>BROTHER</option>
                                                    <option>SISTER</option>
                                                    <option>COUSIN</option>
                                                    <option>NIECE</option>
                                                    <option>GIRLFRIEND</option>
                                                    <option>BOYFRIEND</option>
                                                </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">MOBILE PHONE</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="tel" id="phone" name="phone_no" placeholder="08104175959" pattern="[0-9]{11}" class="form-control" required/>
                                                </div>
                                            </div>  
                                            <div class="panel-footer">                                                                        
                                                 <button class="btn btn-primary pull-right" name="submitnok">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
                                            </div>
                                            </form>
                                        </div>


                                        <!-- Tab third content -->
                                        <div class="tab-pane" id="tab-third">
                                        <form action="connections.php" method="post">
                                            <div class="form-group">
                                                <label class="col-md-6 col-xs-12 control-label">JAMB REGISTRATION NUMBER</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="alphanumeric" id="jamb reg no" name="jamb_reg_no" placeholder="20220547AD" class="form-control" required/>
                                                </div>
                                            </div>  
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">JAMB SCORE</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="number" id="jamb score" name="jamb_score" placeholder="295" pattern="[0-9]{3}" class="form-control" required/>
                                                </div>
                                            </div>  
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">CHOICE</label>
                                                <div class="col-md-6 col-xs-12">                                                                                                                                                        
                                                <select class="form-control select" name="choice" required>
                                                    <option>FIRST</option>
                                                    <option>SECOND</option>
                                                </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-9 col-xs-12 control-label">FIRST SUBJECT & SCORE</label>
                                                <div class="col-md-6 col-xs-12">
                                                <select class="form-control select" name="first_subject" required>
                                                    <option>ENGLISH LANGUAGE</option>                                                      
                                                </select> <br>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="number" id="score" name="score_1" placeholder="95" pattern="[0-9]{3}" class="form-control" required/>
                                                </div>
                                                </div>     
                                            </div>

                                            <div class="form-group">                                        
                                                <label class="col-md-9 col-xs-12 control-label">SECOND SUBJECT & SCORE</label>
                                                <div class="col-md-6 col-xs-12">
                                                <select class="form-control select" name="second_subject" required>
                                                    <option>BIOLOGY</option>
                                                    <option>CHEMISTRY</option>
                                                    <option>AGRICULTURE</option>
                                                    <option>PHYSICS</option>
                                                    <option>CIVIC EDUCATION</option>
                                                    <option>MATHEMATICS</option>
                                                    <option>GEOGRAPHY</option>
                                                    <option>ECONOMICS</option>
                                                    <option>COMPUTER</option>
                                                    <option>FISHERIES</option>
                                                    <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                    <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                    <option>ACCOUNTING</option>
                                                    <option>COMMERCE</option>
                                                    <option>TOURISM</option>
                                                    <option>LITERATURE IN ENGLISH</option>
                                                    <option>CATERING CRAFT PRACTICE</option>
                                                    <option>FOOD AND NUTRITION</option>
                                                    <option>FRENCH</option>
                                                    <option>HISTORY</option>
                                                    <option>GOVERNMENT</option>
                                                    <option>FINE ART</option>
                                                    <option>HAUSA LANGUAGE</option>
                                                    <option>IGBO LANGUAGE</option>
                                                    <option>YORUBA LANGUAGE</option>
                                                    <option>ARABIC</option>
                                                    <option>MUSIC</option>                                                
                                                </select> <br>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="number" id="score" name="score_2" placeholder="95" pattern="[0-9]{3}" class="form-control" required/>
                                                </div>
                                                </div>     
                                            </div>

                                                <div class="form-group">                                        
                                                <label class="col-md-9 col-xs-12 control-label">THIRD SUBJECT & SCORE</label>
                                                <div class="col-md-6 col-xs-12">
                                                <select class="form-control select" name="third_subject" required>
                                                    <option>BIOLOGY</option>
                                                    <option>CHEMISTRY</option>
                                                    <option>AGRICULTURE</option>
                                                    <option>PHYSICS</option>
                                                    <option>CIVIC EDUCATION</option>
                                                    <option>MATHEMATICS</option>
                                                    <option>GEOGRAPHY</option>
                                                    <option>ECONOMICS</option>
                                                    <option>COMPUTER</option>
                                                    <option>FISHERIES</option>
                                                    <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                    <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                    <option>ACCOUNTING</option>
                                                    <option>COMMERCE</option>
                                                    <option>TOURISM</option>
                                                    <option>LITERATURE IN ENGLISH</option>
                                                    <option>CATERING CRAFT PRACTICE</option>
                                                    <option>FOOD AND NUTRITION</option>
                                                    <option>FRENCH</option>
                                                    <option>HISTORY</option>
                                                    <option>GOVERNMENT</option>
                                                    <option>FINE ART</option>
                                                    <option>HAUSA LANGUAGE</option>
                                                    <option>IGBO LANGUAGE</option>
                                                    <option>YORUBA LANGUAGE</option>
                                                    <option>ARABIC</option>
                                                    <option>MUSIC</option>                                                 
                                                </select> <br>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="number" id="score" name="score_3" placeholder="95" pattern="[0-9]{3}" class="form-control" required/>
                                                </div>
                                                </div>     
                                            </div>

                                            <div class="form-group">                                        
                                                <label class="col-md-6 col-xs-12 control-label">FOURTH SUBJECT</label>
                                                <div class="col-md-6 col-xs-12">
                                                <select class="form-control select" name="fouth_subject" required>
                                                    <option>BIOLOGY</option>
                                                    <option>CHEMISTRY</option>
                                                    <option>AGRICULTURE</option>
                                                    <option>PHYSICS</option>
                                                    <option>CIVIC EDUCATION</option>
                                                    <option>MATHEMATICS</option>
                                                    <option>GEOGRAPHY</option>
                                                    <option>ECONOMICS</option>
                                                    <option>COMPUTER</option>
                                                    <option>FISHERIES</option>
                                                    <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                    <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                    <option>ACCOUNTING</option>
                                                    <option>COMMERCE</option>
                                                    <option>TOURISM</option>
                                                    <option>LITERATURE IN ENGLISH</option>
                                                    <option>CATERING CRAFT PRACTICE</option>
                                                    <option>FOOD AND NUTRITION</option>
                                                    <option>FRENCH</option>
                                                    <option>HISTORY</option>
                                                    <option>GOVERNMENT</option>
                                                    <option>FINE ART</option>
                                                    <option>HAUSA LANGUAGE</option>
                                                    <option>IGBO LANGUAGE</option>
                                                    <option>YORUBA LANGUAGE</option>
                                                    <option>ARABIC</option>
                                                    <option>MUSIC</option>                                                 
                                                </select>
                                                </div>
                                            <div class="form-group">
                                                <label class="col-md-6 col-xs-12 control-label">SCORE</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="number" id="score" name="score_4" placeholder="95" pattern="[0-9]{3}" class="form-control" required/>
                                                </div>
                                                </div>     
                                            </div>  
                                            <div class="panel-footer">                                                                        
                                                 <button class="btn btn-primary pull-right" name="submitutme">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
                                            </div>
                                    `   </form> 
                                        </div>


                                    <!-- Tab fourth content -->
                                    <div class="tab-pane" id="tab-fourth">
                                    <form action="connections.php" method="post">
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">PROGRAMME</label>
                                            <div class="col-md-6 col-xs-12">                                                                                     
                                            <select class="form-control select" name="programme" required>
                                                <option>ND FULL TIME</option>
                                                <option>HND FULL TIME</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">SCHOOL</label>
                                            <div class="col-md-6 col-xs-12">                                        
                                            <select class="form-control select" name="school" required>
                                                <option>SCHOOL OF AGRICULTURE AND AGRICULTURAL TECHNOLOGY</option>
                                                <option>SCHOOL OF BUSINESS STUDIES</option>
                                                <option>SCHOOL OF ENVIRONMENTAL STUDIES</option>
                                                <option>SCHOOL OF SCIENCE AND COMPUTER STUDIES</option>
                                                <option>SCHOOL OF ENVIRONMENTAL STUDIES</option>
                                            </select>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">COURSE OF STUDY</label>
                                            <div class="col-md-6 col-xs-12">                                         
                                            <select class="form-control select" name="course_of_study" required>
                                                <option>MICROBIOLOY</option>
                                                <option>SCIENCE LABORATORY TECHNOLOGY</option>
                                                <option>MEDICAL LABORATORY SCIENCE</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="panel-footer">                                                                        
                                                 <button class="btn btn-primary pull-right" name="submitprogram">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
                                            </div>
                                    `   </form> 
                                    </div>



                                    <!-- Tab fifth content -->
                                     <div class="tab-pane" id="tab-fifth">
                                     <form action="connections.php" method="post">
                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="btn btn-info" data-bs-toggle="collapse" href="#collapseOne">
                                                        <div class="form-group">
                                                            <label class="col-md-12 col-xs-6 control-label">O'LEVEL FIRST SITTING</label>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                                        
                                                <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                    
                                                         
                                        <div class="form-group">
                                            <label class="col-md-12 col-xs-12 control-label">FIRST SITTING</label>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">TYPE</label>
                                            <div class="col-md-6 col-xs-12">                                        
                                            <select class="form-control select" name="type" required>
                                                <option>WAEC (MAY/JUNE)</option>
                                                <option>NECO (JUNE/JULY)</option>
                                                <option>WAEC (OCT/NOV)</option>
                                                <option>NECO (NOV/DEC)</option>
                                            </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">EXAM NO</label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <input type="number" id="xam no" name="exam_no" placeholder="4140402023" pattern="[0-9]{10}" class="form-control" required/>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">EXAM YEAR</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" name="exam_year" required>
                                                <option>2022</option>
                                                <option>2021</option>
                                                <option>2020</option>
                                                <option>2019</option>
                                                <option>2018</option>
                                                <option>2017</option>
                                                <option>2016</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                                <option>2013</option>
                                                <option>2012</option>
                                                <option>2011</option>
                                                <option>2010</option>
                                                <option>2009</option>
                                                <option>2008</option>
                                                <option>2007</option>
                                                <option>2006</option>
                                                <option>2005</option>
                                                <option>2004</option>
                                                <option>2003</option>
                                                <option>2002</option>
                                                <option>2001</option>
                                                <option>2000</option>
                                                <option>1999</option>
                                                <option>1998</option>
                                                <option>1997</option>
                                                <option>1996</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SCRATCH CARD PIN/TOKEN</label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <input type="num" id="token" name="scratch_card_pin" pattern="[0-9]{10}" class="form-control" required/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SCRATCH CARD SERIAL NO</label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <input type="alphanumeric" id="scratch_card_serial_no" name="serial no" placeholder="WRN125478926" pattern="[0-9]{15}" class="form-control" required/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12">   
                                            <select class="form-control select" name="subject_1" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option> 
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="grade_1" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="subject_2" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option> 
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" name="grade_2" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>  
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="subject_3" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" name="grade_3" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="subject_4" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" name="grade_4" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="subject_5" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" name="grade_5" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="subject_6" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" name="grade_6" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="subject_7" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" name="grade_7" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="subject_8" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option>
                                            </select>
                                            </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" name="grade_8" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="subject_9" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" name="grade_9" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>
                                        </div>
                                        </div> 
                                        <div class="panel-footer">                                                                        
                                                 <button class="btn btn-primary pull-right" name="submitfirstsitting">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
                                            </div>
                                    `   </form>   
                                    </div>
                            
                                    <!-- Tab fifth second sitting -->   
                                    <div id="accordion">
                                    <form action="connections.php" method="post">
                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="btn btn-info" data-bs-toggle="collapse" href="#collapseTwo">
                                                        <div class="form-group">
                                                            <label class="col-md-12 col-xs-12 control-label">O'LEVEL SECOND SITTING</label>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                                <div id="collapseTwo" class="collapse show" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                   
                                                         
                                        <div class="form-group">
                                            <label class="col-md-12 col-xs-12 control-label">SECOND SITTING</label>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">TYPE</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" name="type" required>
                                                <option>WAEC (MAY/JUNE)</option>
                                                <option>NECO (JUNE/JULY)</option>
                                                <option>WAEC (OCT/NOV)</option>
                                                <option>NECO (NOV/DEC)</option>
                                            </select>
                                            </div>
                                        </div>
                                                

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">EXAM NO</label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <input type="number" id="xam no" name="exam_no" placeholder="4140402023" pattern="[0-9]{10}" class="form-control" required/>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">EXAM YEAR</label>
                                            <div class="col-md-6 col-xs-12">                                        
                                            <select class="form-control select" name="exam_year" required>
                                                <option>2022</option>
                                                <option>2021</option>
                                                <option>2020</option>
                                                <option>2019</option>
                                                <option>2018</option>
                                                <option>2017</option>
                                                <option>2016</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                                <option>2013</option>
                                                <option>2012</option>
                                                <option>2011</option>
                                                <option>2010</option>
                                                <option>2009</option>
                                                <option>2008</option>
                                                <option>2007</option>
                                                <option>2006</option>
                                                <option>2005</option>
                                                <option>2004</option>
                                                <option>2003</option>
                                                <option>2002</option>
                                                <option>2001</option>
                                                <option>2000</option>
                                                <option>1999</option>
                                                <option>1998</option>
                                                <option>1997</option>
                                                <option>1996</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SCRATCH CARD PIN/TOKEN</label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <input type="num" id="token" name="scratch_card_pin" placeholder="" pattern="[0-9]{10}" class="form-control" required/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SCRATCH CARD SERIAL NO</label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <input type="alphanumeric" id="serial no" name="scratch_card_serial_no" placeholder="WRN125478926" pattern="[0-9]{15}" class="form-control" required/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12">      
                                            <select class="form-control select" name="subject_1" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option> 
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">     
                                            <select class="form-control select" name="grade_1" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="subject_2" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" name="grade_2" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="subject_3" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" name="grade_3" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="subject_4" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" name="grade_4" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="subject_5" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" name="grade_5" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="subject_6" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" name="grade_6" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="subject_7" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" name="grade_7" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="subject_8" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" name="grade_8" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" name="subject_9" required>
                                                <option>ENGLISH LANGUAGE</option>
                                                <option>BIOLOGY</option>
                                                <option>CHEMISTRY</option>
                                                <option>AGRICULTURE</option>
                                                <option>PHYSICS</option>
                                                <option>CIVIC EDUCATION</option>
                                                <option>MATHEMATICS</option>
                                                <option>GEOGRAPHY</option>
                                                <option>ECONOMICS</option>
                                                <option>COMPUTER</option>
                                                <option>FISHERIES</option>
                                                <option>CHRISTAIN RELIGIOUS STUDIES</option>
                                                <option>ISLAMIC RELIGIOUS STUDIES</option>
                                                <option>ACCOUNTING</option>
                                                <option>COMMERCE</option>
                                                <option>TOURISM</option>
                                                <option>LITERATURE IN ENGLISH</option>
                                                <option>CATERING CRAFT PRACTICE</option>
                                                <option>FOOD AND NUTRITION</option>
                                                <option>FRENCH</option>
                                                <option>HISTORY</option>
                                                <option>GOVERNMENT</option>
                                                <option>FINE ART</option>
                                                <option>HAUSA LANGUAGE</option>
                                                <option>IGBO LANGUAGE</option>
                                                <option>YORUBA LANGUAGE</option>
                                                <option>ARABIC</option>
                                                <option>MUSIC</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" name="grade_9" required>
                                                <option>A1</option>
                                                <option>B2</option>
                                                <option>B3</option>
                                                <option>C4</option>
                                                <option>C5</option>
                                                <option>C6</option>
                                                <option>D7</option>
                                                <option>E8</option>
                                                <option>F9</option>
                                            </select>
                                            </div>
                                        </div>

                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="panel-footer">                                                                        
                                                 <button class="btn btn-primary pull-right" name="submitsecondsitting">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
                                            </div>
                                    `   </form>
                                    </div>    


                                    <!-- Tab sixth content -->
                                    <div class="tab-pane" id="tab-sixth">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">PASSPORT</label>
                                            <div class="col-md-6 col-xs-12">                                 

                                            <div id="content">
		                                        <form method="POST" action="" enctype="multipart/form-data">
			                                        <div class="form-group">
				                                        <input class="form-control" type="file" name="uploadfile" value="" />
			                                        </div>
			                                        <div class="form-group">
				                                        <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
			                                        </div>
		                                        </form>
	                                        </div>
                                            <div id="display-image">
		                                        <?php
		                                        $query = " select * from image ";
		                                        $result = mysqli_query($db, $query);

		                                            while ($data = mysqli_fetch_assoc($result)) {
		                                        ?>
			                                        <img src="./image/<?php echo $data['filename']; ?>">

		                                        <?php
                                                }
                                                 ?>
                                            </div>

                                            <h5>To upload your passport, scan and save the passport in the computer file system, Click on the box shown above to display the file dialog box. Select the passport file from the saved location.</h5>

                                            <h6 style="color: black; font-family: sans-serif; font-size: 15px;">Please note that the passport photo background should be plain (white and clear) and passport size should not be more than 50kb. The file format must be either .gif, .jpg, .jpeg, or .bmp file format.</h6>
                                            </div>
                                        </div>
                                        <div class="panel-footer">                                                                        
                                                 <button class="btn btn-primary pull-right" name="submitpassport">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
                                            </div>
                                    `   </form>
                                    </div>


                                    <!-- Tab seventh content -->
                                    <div class="tab-pane" id="tab-seventh">

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">PRINT</label>
                                            <div class="col-md-6 col-xs-12">                                 

                                            <button onClick="window.print(biodata)">Print my form</button>    
                                        </div>

                                    </div>

                                    </div>

                                    
                                </div> 

                            </form>
                            </form>
                            
                        </div>
                    </div>                    
                    
                    </div>
                </div>
            </div>
		</div>

<?php
include "footer.php";
?>
