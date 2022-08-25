<?php

session_start();

    include("connections.php");
    include("functions.php");

    $user_data = check_login($con);
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
                        Welcome, <?php echo $user_data['jamb_matric_no,jamb_reg_no']; ?>
                            
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

                                           <!-- Bio data -->
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">SURNAME</label>
                                                <div class="col-md-6 col-xs-12">                                                                                                                                                        
                                                    <input type="text" class="form-control" placeholder="Adeyemi" required/>                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">FIRST NAME</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" class="form-control" placeholder="Esther" required/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">OTHER NAME</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" class="form-control" placeholder="Ada" required/>
                                                </div>
                                            </div>

                                            <div class="form-group">                                        
                                                <label class="col-md-3 col-xs-12 control-label">SEX</label>
                                                <div class="col-md-6">
                                                    <select class="form-control select" required>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Other</option>                                                      
                                                    </select>   
                                                </div>        
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">DATE OF BIRTH</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="datetime-local" id="date of birth" name="date of birth" class="form-control" placeholder="Date of Birth" required/>
                                                </div>
                                            </div>                                           

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">STATE OF ORIGIN</label>
                                                <div class="col-md-6 col-xs-12">     
                                                <select class="form-control select" required>
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
                                                <select class="form-control select" required>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                                </div>
                                        </div> 
                                            
                                        <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">HOME TOWN</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" id="home town" name="Home Town" class="form-control" placeholder="Home Town" required/>
                                                </div>
                                            </div>  

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">MOBILE PHONE</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="tel" id="phone" name="phone" placeholder="0810-417-5959" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" class="form-control" required/>
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
                                                <select class="form-control select" required>
                                                    <option>Christianity</option>
                                                    <option>Muslim</option>
                                                    <option>Other</option>
                                                </select>
                                                </div>
                                            </div>  

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">STREET ADDRESS</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" id="street address" name="street address" class="form-control" placeholder="25 Alan Street" required/>
                                                </div>
                                            </div>
                                            
                                        </div>   


                                        <!-- tab second content -->
                                        <div class="tab-pane" id="tab-second">

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">NEXT OF KIN</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" id="name" name="next of kin" class="form-control" placeholder="Adeyemi David Chiemele" required/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-6 col-xs-12 control-label">NEXT OF KIN'S ADDRESS</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" id="street address" name="street address" class="form-control" placeholder="25 Alan Street" required/>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">RELATIONSHIP</label>
                                                <div class="col-md-6 col-xs-12">                                                                                                                                                        
                                                <select class="form-control select" required>
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
                                                    <input type="tel" id="phone" name="phone" placeholder="0810-417-5959" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" class="form-control" required/>
                                                </div>
                                            </div>  
                                            
                                        </div>


                                        <!-- Tab third content -->
                                        <div class="tab-pane" id="tab-third">

                                            <div class="form-group">
                                                <label class="col-md-6 col-xs-12 control-label">JAMB REGISTRATION NUMBER</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="alphanumeric" id="jamb reg no" name="jamb reg no" placeholder="20220547AD" class="form-control" required/>
                                                </div>
                                            </div>  
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">JAMB SCORE</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="number" id="jamb score" name="jamb score" placeholder="295" pattern="[0-9]{3}" class="form-control" required/>
                                                </div>
                                            </div>  
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">CHOICE</label>
                                                <div class="col-md-6 col-xs-12">                                                                                                                                                        
                                                <select class="form-control select" required>
                                                    <option>FIRST</option>
                                                    <option>SECOND</option>
                                                </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-9 col-xs-12 control-label">FIRST SUBJECT & SCORE</label>
                                                <div class="col-md-6 col-xs-12">
                                                <select class="form-control select" required>
                                                    <option>ENGLISH LANGUAGE</option>                                                      
                                                </select> <br>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="number" id="score" name="score" placeholder="95" pattern="[0-9]{3}" class="form-control" required/>
                                                </div>
                                                </div>     
                                            </div>

                                            <div class="form-group">                                        
                                                <label class="col-md-9 col-xs-12 control-label">SECOND SUBJECT & SCORE</label>
                                                <div class="col-md-6 col-xs-12">
                                                <select class="form-control select" required>
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
                                                    <input type="number" id="score" name="score" placeholder="95" pattern="[0-9]{3}" class="form-control" required/>
                                                </div>
                                                </div>     
                                            </div>

                                                <div class="form-group">                                        
                                                <label class="col-md-9 col-xs-12 control-label">THIRD SUBJECT & SCORE</label>
                                                <div class="col-md-6 col-xs-12">
                                                <select class="form-control select" required>
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
                                                    <input type="number" id="score" name="score" placeholder="95" pattern="[0-9]{3}" class="form-control" required/>
                                                </div>
                                                </div>     
                                            </div>

                                            <div class="form-group">                                        
                                                <label class="col-md-6 col-xs-12 control-label">FOURTH SUBJECT</label>
                                                <div class="col-md-6 col-xs-12">
                                                <select class="form-control select" required>
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
                                                    <input type="number" id="score" name="score" placeholder="95" pattern="[0-9]{3}" class="form-control" required/>
                                                </div>
                                                </div>     
                                            </div>   
                                        </div>


                                    <!-- Tab fourth content -->
                                    <div class="tab-pane" id="tab-fourth">

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">PROGRAMME</label>
                                            <div class="col-md-6 col-xs-12">                                                                                     
                                            <select class="form-control select" required>
                                                <option>ND FULL TIME</option>
                                                <option>HND FULL TIME</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">SCHOOL</label>
                                            <div class="col-md-6 col-xs-12">                                        
                                            <select class="form-control select" required>
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
                                            <select class="form-control select" required>
                                                <option></option>
                                                <option></option>
                                                <option></option>
                                            </select>
                                            </div>
                                        </div>

                                    </div>



                                    <!-- Tab fifth content -->
                                     <div class="tab-pane" id="tab-fifth">

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
                                            <select class="form-control select" required>
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
                                                <input type="number" id="xam no" name="exam no" placeholder="4140402023" pattern="[0-9]{10}" class="form-control" required/>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">EXAM YEAR</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" required>
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
                                                <input type="num" id="token" name="pin" pattern="[0-9]{10}" class="form-control" required/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SCRATCH CARD SERIAL NO</label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <input type="alphanumeric" id="serial no" name="serial no" placeholder="WRN125478926" pattern="[0-9]{15}" class="form-control" required/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12">   
                                            <select class="form-control select" required>
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
                                            <select class="form-control select" required>
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
                                            <select class="form-control select" required>

                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" required>
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
                                            <select class="form-control select" required>

                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" required>
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
                                            <select class="form-control select" required>

                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" required>
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
                                            <select class="form-control select" required>
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
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" required>
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
                                            <select class="form-control select" required>
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
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" required>
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
                                            <select class="form-control select" required>

                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" required>
                                                
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" required>

                                            </select>
                                            </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" required>
                                                
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" required>
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
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" required>
                                                
                                            </select>
                                            </div>
                                        </div>
                                        </div>
                                        </div>    
                                    </div>
                            
                                    <!-- Tab fifth second sitting -->   
                                    <div id="accordion">
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
                                            <select class="form-control select" required>
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
                                                <input type="number" id="xam no" name="exam no" placeholder="4140402023" pattern="[0-9]{10}" class="form-control" required/>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">EXAM YEAR</label>
                                            <div class="col-md-6 col-xs-12">                                        
                                            <select class="form-control select" required>
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
                                                <input type="num" id="token" name="pin" placeholder="" pattern="[0-9]{10}" class="form-control" required/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SCRATCH CARD SERIAL NO</label>
                                            <div class="col-md-6 col-xs-12">                                            
                                                <input type="alphanumeric" id="serial no" name="serial no" placeholder="WRN125478926" pattern="[0-9]{15}" class="form-control" required/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12">      
                                            <select class="form-control select" required>
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
                                            <select class="form-control select" required>
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
                                            <select class="form-control select" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">SUBJECT</label>
                                            <div class="col-md-6 col-xs-12"> 
                                            <select class="form-control select" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">GRADE</label>
                                            <div class="col-md-6 col-xs-12">  
                                            <select class="form-control select" required>
                                            </div>
                                        </div>

                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                
                                    </div>    


                                    <!-- Tab sixth content -->
                                    <div class="tab-pane" id="tab-sixth">

                                        <div class="form-group">
                                            <label class="col-md-6 col-xs-12 control-label">PASSPORT</label>
                                            <div class="col-md-6 col-xs-12">                                 

                                            <input type="file" id="myfile" name="myfile">

                                            <h5>To upload your passport, scan and save the passport in the computer file system, Click on the box shown above to display the file dialog box. Select the passport file from the saved location.</h5>

                                            <h6 style="color: black; font-family: sans-serif; font-size: 15px;">Please note that the passport photo background should be plain (white and clear) and passport size should not be more than 50kb. The file format must be either .gif, .jpg, .jpeg, or .bmp file format.</h6>
                                            </div>
                                        </div>

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
                                    <div class="panel-footer">                                                                        
                                        <button class="btn btn-primary pull-right">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
                                    </div>
                                </div>                                
                            
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
