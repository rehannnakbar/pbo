 <!DOCTYPE html>
<html lang="en">
<head>
<body>
<form action="login.php" method="post">
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Register</title>

    <!-- font icon--> 
    <link rel="stylesheet= href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- main css-->
    <link rel="stylesheet" href="css/style.css">
</head 
<body>
    <div class="main"> 
    <div style="padding: 50px;">
    <marquee behavior="" direction=""><h2>silakan registrasi</h2></marquee>

    <!--sign up form--> 
    <section class="sign up"> 
        <div class="container">
            <div class="sign up form"> 
                <h2 class="form-title">Form register</h2>
                <form method="POST" action="proses_register.php." class="register-form" id="register form"> 
                    <div class="form-group"> 
                        <label for="name"><i class="zmdi zmdi-nik"></i></label>
                        <input type="nik" name="nik" id="nik" placeholder="nik"/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="re_pass" id="re_pass" placeholder="masukan password"/>
                    </div>
                    <div class="form-group-form-button">
                        <input type="submit" name="sign up" id="sign up" class="form-submit" value="register"/>
                    </form>
           
        <!-- JS-->
        <script src="vendor/jquery/jquery.min.js"></script> 
        <script src="js/main.js"></script>
</html> 