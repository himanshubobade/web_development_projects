<?php
include('classes/DB.php');

if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$username))) {

                if (password_verify($password, DB::query('SELECT password FROM users WHERE username=:username', array(':username'=>$username))[0]['password'])) {
                        echo 'Logged in!';
                        $cstrong = True;
                        $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                        $user_id = DB::query('SELECT id FROM users WHERE username=:username', array(':username'=>$username))[0]['id'];
                        DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$user_id));
                        setcookie("SNID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                        setcookie("SNID_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);
                        header( 'Location: index.php' ) ;

                } else {
                        echo 'Incorrect Password!';
                }

        } else {
                echo 'User not registered!';
        }

}

?>
<!--
<h1>Login to your account</h1>
<form action="login.php" method="post">
<input type="text" name="username" value="" placeholder="Username ..."><p />
<input type="password" name="password" value="" placeholder="Password ..."><p />
<input type="submit" name="login" value="Login">
</form>
-->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialNetwork</title>
    <link rel="stylesheet" type="text/css" href="assets/css/homepage/footer.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-clean">
        <h1 style="text-align: center; color:black; margin-bottom: 50px;">Welcome to Schuler's Hub login</h1>
        <form action="login.php" method="post">
                <h2 class="sr-only">Login Form</h2>
                <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
                <div class="form-group">
                        <input class="form-control" type="text" id="username" name="username" value="" placeholder="Username ...">
                </div>
                <div class="form-group">
                        <input class="form-control" type="password" id="password" name="password" value="" placeholder="Password">
                </div>
                <div class="form-group">
                        <button class="btn btn-primary btn-block" id="login" type="submit" name="login" value="Login" data-bs-hover-animate="shake">Log In</button>
                </div><a href="#" class="forgot">Forgot your email or password?</a>
        </form>
        <!--<form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group">
                <input class="form-control" type="text" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" id="login" type="button" data-bs-hover-animate="shake">Log In</button>
            </div><a href="#" class="forgot">Forgot your email or password?</a></form>
        -->
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/bs-animation.js"></script> -->
    <script type="text/javascript">
        $('#login').click(function() {

                $.ajax({

                        type: "POST",
                        url: "api/auth",
                        processData: false,
                        contentType: "application/json",
                        data: '{ "username": "'+ $("#username").val() +'", "password": "'+ $("#password").val() +'" }',
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
