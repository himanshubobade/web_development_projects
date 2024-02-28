<?php
include('classes/DB.php');
include('classes/Mail.php');

if (isset($_POST['createaccount'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $verified = $_POST['verified'];
        $profileimg = $_POST["profileimg"];
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $lname = $_POST["lname"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];
        $currently_persuing= $_POST["currently_persuing"];
        $yr_admission_graduation = $_POST["yr_admission_graduation"];
        $yr_graduation_passing = $_POST["yr_graduation_passing"];
        $college = $_POST["college"];
        $university= $_POST["university"];
        $uni_reg_no = $_POST["uni_reg_no"];
        $courses = $_POST["courses"];
        $course_interest = $_POST["course_interest"];
        $internships = $_POST["internships"];
        $semester = $_POST["semester"];
        $gpa = $_POST["gpa"];
        $bnametwelve = $_POST["bnametwelve"];
        $baggtwelve = $_POST["baggtwelve"];
        $bnameten = $_POST["bnameten"];
        $baggten = $_POST["baggten"];
        $tech_interest = $_POST["tech_interest"];
        $wsample_link = $_POST["wsample_link"];
        $non_tech_interest = $_POST["non_tech_interest"];
        $city = $_POST["city"];


        if (!DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$username))) {

                if (strlen($username) >= 3 && strlen($username) <= 32) {

                        if (preg_match('/[a-zA-Z0-9_]+/', $username)) {

                                if (strlen($password) >= 6 && strlen($password) <= 60) {

                                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                                if (!DB::query('SELECT email FROM users WHERE email=:email', array(':email'=>$email))) {

                                        DB::query('INSERT INTO users VALUES (\'\', :username, :password, :email, \'\', \'\', :fname, :mname, :lname, :dob, :gender, :currently_persuing, :yr_admission_graduation, :yr_graduation_passing, :college, :university, :uni_reg_no, :courses, :course_interest, :internships, :semester, :gpa, :bnametwelve, :baggtwelve, :bnameten, :baggten, :tech_interest, :wsample_link, :non_tech_interest, :city)', array(':username'=>$username, ':password'=>password_hash($password, PASSWORD_BCRYPT), ':email'=>$email, ':fname'=>$fname, ':mname'=>$mname, ':lname'=>$lname, ':dob'=>$dob, ':gender'=>$gender, ':currently_persuing'=>$currently_persuing, ':yr_admission_graduation'=>$yr_admission_graduation, ':yr_graduation_passing'=>$yr_graduation_passing, ':college'=>$college, ':university'=>$university, ':uni_reg_no'=>$uni_reg_no, ':courses'=>$courses, ':course_interest'=>$course_interest, ':internships'=>$internships, ':semester'=>$semester, ':gpa'=>$gpa, ':bnametwelve'=>$bnametwelve, ':baggtwelve'=>$bnametwelve, ':bnameten'=>$bnameten, ':baggten'=>$baggten, ':tech_interest'=>$tech_interest, ':wsample_link'=>$wsample_link, ':non_tech_interest'=>$non_tech_interest, ':city'=>$city));
                                        #Mail::sendMail('Welcome to our Social Network!', 'Your account has been created!', $email);
                                        echo "Success!";
                                } else {
                                        echo 'Email in use!';
                                }
                        } else {
                                        echo 'Invalid email!';
                                }
                        } else {
                                echo 'Invalid password!';
                        }
                        } else {
                                echo 'Invalid username';
                        }
                } else {
                        echo 'Invalid username';
                }

        } else {
                echo 'User already exists!';
        }
}
?>
<!--
<h1>Register</h1>
<form action="create-account.php" method="post">
<input type="text" name="username" value="" placeholder="Username ..."><p />
<input type="password" name="password" value="" placeholder="Password ..."><p />
<input type="email" name="email" value="" placeholder="someone@somesite.com"><p />
<input type="submit" name="createaccount" value="Create Account">
</form>
-->
<!--
        Static part
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialNetwork</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/homepage/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-clean">
        <h1 style="text-align: center; margin-bottom: 50px;">Welcome, Create your account to get started!!!</h1>
        <form action="create-account.php" method="post" enctype="multipart/form-data">
            <h2 class="sr-only">Create Account</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group">
                <input class="form-control" id="username" type="text" name="username" value="" placeholder="Username ...">
            </div>
            <div class="form-group">
                <input class="form-control" id="email" type="email" name="email" value="" placeholder="someone@somesite.com">
            </div>
            <div class="form-group">
                <input class="form-control" id="password" type="password" name="password" value="" placeholder="Password ...">
            </div>
            <div class="form-group">
                <input class="form-control" id="verified" type="text" name="verified" value="" placeholder="verified">
            </div>
            <input type="hidden" name="size" value="1000000">
            <div class="form-group">
                <input class="form-control" id="profileimg" type="file" name="profileimg" value="" placeholder="Your profile Image">
            </div>
            <div class="form-group">
                <input class="form-control" id="fname" type="text" name="fname" value="" placeholder="Your First Name">
            </div>
            <div class="form-group">
                <input class="form-control" id="mname" type="text" name="mname" value="" placeholder="Your Middle Name">
            </div>
            <div class="form-group">
                <input class="form-control" id="lname" type="text" name="lname" value="" placeholder="Your Last Name">
            </div>
            <div class="form-group">
                <input class="form-control" id="dob" type="date" name="dob" value="" placeholder="Your Date Of Birth">
            </div>
            <div class="form-group">
                <select class="form-control" id="gender" type="text" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                </select>
                <!--<input class="form-control" id="gender" type="text" name="gender" value="" placeholder="Your Gender">-->
            </div>
            <div class="form-group">
                        <select class="form-control" id="currently_persuing" name="currently_persuing" required>
                                <option value="B.E./B.Tech" selected>B.E./B.Tech</option>
                                <option value="B.Com">B.Com</option>
                                <option value="B.Sc">B.Sc</option>
                                <option value="BCA">BCA</option>
                                <option value="B.Arts">B.Arts</option>
                                <option value="B.Arch">B.Arch</option>
                                <option value="B.A.M.S">B.A.M.S</option>
                                <option value="B.B.A">B.B.A</option>
                                <option value="L.L.B.">L.L.B.</option>
                                <option value="B.H.M.S">B.H.M.S</option>
                                <option value="M.B.B.S.">M.B.B.S.</option>
                                <option value="B.Pharm">B.Pharm</option>
                                <option value="M.D.">M.D.</option>
                                <option value="M.B.A.">M.B.A.</option>
                                <option value="M.Com.">M.Com.</option>
                                <option value="M.Sc.">M.Sc.</option>
                        </select>
                <!--<input class="form-control" id="currently_persuing" type="text" name="currently_persuing" value="" placeholder="You are currently Persuing?">-->
            </div>
            <div class="form-group">
                <input class="form-control" id="yr_admission_graduation" type="number" min="2010" max="2021" name="yr_admission_graduation" value="" placeholder="Your yr of admission for graduation">
            </div>
            <div class="form-group">
                <input class="form-control" id="yr_graduation_passing" type="number" min="2018" max="2024" name="yr_graduation_passing" value="" placeholder="Your yr of passing for graduation">
            </div>
            <div class="form-group">
                <input class="form-control" id="college" type="text" name="college" value="" placeholder="Your College">
            </div>
            <div class="form-group">
                <input class="form-control" id="university" type="text" name="university" value="" placeholder="Your University">
            </div>
            <div class="form-group">
                <input class="form-control" id="uni_reg_no" type="text" name="uni_reg_no" value="" placeholder="Your University Registration No">
            </div>
            <div class="form-group">
                <input class="form-control" id="courses" type="text" name="courses" value="" placeholder="Courses you accomplished">
            </div>
            <div class="form-group">
                <input class="form-control" id="course_interest" type="text" name="course_interest" value="" placeholder="Courses you are interested in">
            </div>
            <div class="form-group">
                <input class="form-control" id="internships" type="text" name="internships" value="" placeholder="Specify Internships if any or type None">
            </div>
            <div class="form-group">
                <input class="form-control" id="semester" type="text" name="semester" value="" placeholder="Your current semester">
            </div>
            <div class="form-group">
                <input class="form-control" id="gpa" type="number" name="gpa" min="0" max="10" step="0.01" value="" placeholder="Your GPA">
            </div>
            <div class="form-group">
                <input class="form-control" id="bnametwelve" type="text" name="bnametwelve" value="" placeholder="12th Board Name">
            </div>
            <div class="form-group">
                <input class="form-control" id="baggtwelve" type="number" name="baggtwelve" value="" placeholder="Your 12th Aggregate">
            </div>
            <div class="form-group">
                <input class="form-control" id="bnameten" type="text" name="bnameten" value="" placeholder="10th Board Name">
            </div>
            <div class="form-group">
                <input class="form-control" id="baggten" type="number" name="baggten" value="" placeholder="Your 10th Aggregate">
            </div>
            <div class="form-group">
                <input class="form-control" id="tech_interest" type="text" name="tech_interest" value="" placeholder="Your technical interests">
            </div>
            <div class="form-group">
                <input class="form-control" id="wsample_link" type="text" name="wsample_link" value="" placeholder="Enter Your Work Sample Link Here..">
            </div>
            <div class="form-group">
                <input class="form-control" id="non_tech_interest" type="text" name="non_tech_interest" value="" placeholder="Your non-technical interests">
            </div>
            <div class="form-group">
                <input class="form-control" id="city" type="text" name="city" value="" placeholder="Your current city">
            </div>
            




            <!--
            <div class="form-group">
                <input class="form-control" id="" type="" name="" value="" placeholder="">
            </div>-->
            <div class="form-group">
                <button class="btn btn-primary btn-block" id="ca" type="submit" name="createaccount" value="Create Account" data-bs-hover-animate="shake">Create Account</button>
            </div><a href="#" class="forgot">Already got an account? Click here!</a>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#ca').click(function() {

                $.ajax({

                        type: "POST",
                        url: "api/users",
                        processData: false,
                        contentType: "application/json",
                        data: '{ "username": "'+ $("#username").val() +'", "email": "'+ $("#email").val() +'", "password": "'+ $("#password").val() +'" }',
                        success: function(r) {
                                console.log(r)
                        },
                        error: function(r) {
                                setTimeout(function() {
                                $('[data-bs-hover-animate]').removeClass('animated ' + $('[data-bs-hover-animate]').attr('data-bs-hover-animate'));
                                }, 2000)
                                $('[data-bs-hover-animate]').addClass('animated ' + $('[data-bs-hover-animate]').attr('data-bs-hover-animate'))
                                console.log(r)
                        }

                });

        });
    </script>
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

        <p class="footer-company-name"> © Schulershub.com | Copyright All Reserved 2020   </p>
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
                <p><a href="mailto:support@company.com" style="color: black;">schulershub@gmail.com</a></p>
        </div>

        </div>

        <div class="footer-right">

        <p class="footer-company-about" style="color: black;">
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
