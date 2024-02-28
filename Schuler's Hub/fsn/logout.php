<?php
include('./classes/DB.php');
include('./classes/Login.php');

if (!Login::isLoggedIn()) {
        die("Not logged in.");
}

if (isset($_POST['confirm'])) {

        if (isset($_POST['alldevices'])) {

                DB::query('DELETE FROM login_tokens WHERE user_id=:userid', array(':userid'=>Login::isLoggedIn()));

        } else {
                if (isset($_COOKIE['SNID'])) {
                        DB::query('DELETE FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['SNID'])));
                }
                setcookie('SNID', '1', time()-3600);
                setcookie('SNID_', '1', time()-3600);
        }

}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialNetwork</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/homepage/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-clean">
        <h1 style="text-align: center; color:black; margin-bottom: 50px;">Expecting you back soon!!</h1>
        <form action="logout.php" method="post" style="margin-bottom: 100px;">
            <h2 class="sr-only">Logout of your Account?</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group">
                <input type="checkbox" name="alldevices" value="alldevices"> Logout of all devices?<br />
            </div>
            <div class="form-group">
            <input type="submit" name="confirm" value="Confirm">
            </div>
        </form>
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

<!--
<h1>Logout of your Account?</h1>
<p>Are you sure you'd like to logout?</p>
<form action="logout.php" method="post">
        <input type="checkbox" name="alldevices" value="alldevices"> Logout of all devices?<br />
        <input type="submit" name="confirm" value="Confirm">
</form>
-->