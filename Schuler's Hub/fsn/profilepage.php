<?php
include('./classes/DB.php');
include('./classes/Login.php');
include('./classes/Post.php');
include('./classes/Image.php');
include('./classes/Notify.php');
/*
$username = "";
$verified = False;
$isFollowing = False;

$username = DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$_GET['username']))[0]['username'];
$userid = DB::query('SELECT id FROM users WHERE username=:username', array(':username'=>$_GET['username']))[0]['id'];
$verified = DB::query('SELECT verified FROM users WHERE username=:username', array(':username'=>$_GET['username']))[0]['verified'];
$followerid = Login::isLoggedIn();
*/
$userid =  Login::isLoggedIn();
$username = DB::query("SELECT username FROM users WHERE id = '".$userid."' ")[0]['username'];
$fname = DB::query("SELECT fname FROM users WHERE id = '".$userid."' ")[0]['fname'];
$mname = DB::query("SELECT mname FROM users WHERE id = '".$userid."' ")[0]['mname'];
$lname = DB::query("SELECT lname FROM users WHERE id = '".$userid."' ")[0]['lname'];
$dob = DB::query("SELECT dob FROM users WHERE id = '".$userid."' ")[0]['dob'];
$gender = DB::query("SELECT gender FROM users WHERE id = '".$userid."' ")[0]['gender'];
$currently_persuing = DB::query("SELECT currently_persuing FROM users WHERE id = '".$userid."' ")[0]['currently_persuing'];
$yr_admission_graduation = DB::query("SELECT yr_admission_graduation FROM users WHERE id = '".$userid."' ")[0]['yr_admission_graduation'];
$yr_graduation_passing = DB::query("SELECT yr_graduation_passing FROM users WHERE id = '".$userid."' ")[0]['yr_graduation_passing'];
$college = DB::query("SELECT college FROM users WHERE id = '".$userid."' ")[0]['college'];
$university = DB::query("SELECT university FROM users WHERE id = '".$userid."' ")[0]['university'];
$uni_reg_no = DB::query("SELECT uni_reg_no FROM users WHERE id = '".$userid."' ")[0]['uni_reg_no'];
$courses = DB::query("SELECT courses FROM users WHERE id = '".$userid."' ")[0]['courses'];
$course_interest = DB::query("SELECT course_interest FROM users WHERE id = '".$userid."' ")[0]['course_interest'];
$internships = DB::query("SELECT internships FROM users WHERE id = '".$userid."' ")[0]['internships'];
$semester = DB::query("SELECT semester FROM users WHERE id = '".$userid."' ")[0]['semester'];
$gpa = DB::query("SELECT gpa FROM users WHERE id = '".$userid."' ")[0]['gpa'];
$bnametwelve = DB::query("SELECT bnametwelve FROM users WHERE id = '".$userid."' ")[0]['bnametwelve'];
$baggtwelve= DB::query("SELECT baggtwelve FROM users WHERE id = '".$userid."' ")[0]['baggtwelve'];
$bnameten = DB::query("SELECT bnameten FROM users WHERE id = '".$userid."' ")[0]['bnameten'];
$baggten = DB::query("SELECT baggten FROM users WHERE id = '".$userid."' ")[0]['baggten'];
$tech_interest = DB::query("SELECT tech_interest FROM users WHERE id = '".$userid."' ")[0]['tech_interest'];
$wsample_link = DB::query("SELECT wsample_link FROM users WHERE id = '".$userid."' ")[0]['wsample_link'];
$non_tech_interest = DB::query("SELECT non_tech_interest FROM users WHERE id = '".$userid."' ")[0]['non_tech_interest'];
$city = DB::query("SELECT city FROM users WHERE id = '".$userid."' ")[0]['city'];


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="profilepage.css">
        <link rel="stylesheet" type="text/css" href="assets/css/homepage/grid.css">
        <link rel="stylesheet" type="text/css" href="assets/css/homepage/homefooter.css">
        <link rel="stylesheet" type="text/css" href="assets/css/homepage/normalize.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <title>Profile Page</title>

    </head>
    <body>
        
        <nav class="profilenav">
            <div class="row">
                <div class="col span-1-of-12"></div>
                <div class="col span-3-of-12"><h3>SCHULER'S HUB</h3></div>
                <div class="col span-1-of-12"></div>
                <div class="col span-6-of-12">
                    <ul class="main-nav">
                        <li><a href="course.html">Courses</a></li>
                        <li><a href="index.html">Timeline</a></li>
                        <li><a href="messages.html">Messages</a></li>
                        <li><a href="logout.php">Log-out</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-12"></div>
                
            </div>
        </nav>
        
        <section class="marginof">
            <div class="col span-1-of-12">
            </div>
            <div class="col span-3-of-12">
                <div class="profilephoto">
                    <img src="assets/css/homepage/img/ww.jfif" height="500px" width="500px">
                    <div class="textaligncol">
                        <h3><?php echo $currently_persuing ; echo "(" ;echo $yr_admission_graduation; echo "-"; echo $yr_graduation_passing; echo ")";?></h3>
                        <h3><?php echo $college;?></h3>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-12">
            </div>
            <div class="col span-6-of-12" animated zoomIn>
                <h1 style="font-size: 10px;"></h1>
                <h4>Intern/Student</h4>
                <h3><b>Date Of Birth:</b> <?php echo $dob;?></h3>
                <h3><b>Name Of University:</b> <?php echo $university;?></h3>
                <h3><b>Registration Number At University:</b> <?php echo $uni_reg_no;?></h3>
                <h3><b>Courses Accomplished:</b><?php echo $courses;?></h3>
                <h3><b>Bootcamps Or Internships:</b> <?php echo $internships;?></h3>
                <h3><b>Average GPA(current semesters):</b> <?php echo $gpa;?> </h3>
                <h3><b>12th Board Name:</b> <?php echo $bnametwelve, $baggtwelve;?></h3>
                <h3><b>10th Board Name:</b> <?php echo $bnameten, $baggten;?></h3>
                <h3><b>Technical Interests:</b> <?php echo $tech_interest;?></h3>
                <h3><b>Non-Technical Interests:</b><?php echo $non_tech_interest;?> </h3>
                <h3><b>Work Samples:</b> <?php echo $wsample_link;?></h3>
                <h3><b>Current City:</b> <?php echo $city;?></h3>
            </div>
            <div class="col span-1-of-12">
            </div>
        </section>
        <footer class="footer-distributed">

            <div class="footer-left">
      
                <h3>Schulers<span>Hub</span></h3>
        
                <p class="footer-links">
                    <a href="#" class="link-1">Home</a>
                    
                
                
                    <a href="http://localhost/dashboard/working-files/icon.html">Teams</a>
                
                    <a href="#">Feedback-form</a>
                    
                    <a href="#">T&C</a>
                    
                    <a href="#">Contact-us</a>
                </p>
        
                <p style="color:white;" class="footer-company-name"> © Schulershub.com | Copyright All Reserved 2020   </p>
            </div>
      
            <div class="footer-center">
      
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>sector-7 C.B.D belaphur</span> kharghar, Navi Mumbai</p>
                </div>
        
                <div>
                    <i class="fa fa-phone"></i>
                    <p>+123-456-7890</p>
                </div>
        
                <div>
                    <i class="fa fa-envelope"></i>
                    <p ><a href="mailto:support@company.com" style="color: white;">schulershub@gmail.com</a></p>
                </div>
      
            </div>
      
            <div class="footer-right">
      
                <p class="footer-company-about" style="color: white;">
                    <span>About the company</span>
                    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>
      
                <div class="footer-icons">
        
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
        
                </div>
      
            </div>
      
        </footer>
        
        
    </body>
</html>