<?php 
if(!isset($_SESSION)){
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login and Registration Form in HTML</title>
    <link rel="stylesheet" href="../css/LoginRegister.css">
    <link rel="stylesheet" href="../css/HomePage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="wrapper">
        <div class="title-text">
            <div class="title login">
                Login Form
            </div>
            <div class="title signup">
                Signup Form
            </div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
            
                <form action="../configurations/loginconfig/loginVerify.php" method="POST" class="login">
            <?php
                include_once 'Dashboard/message.php';
                ?>
                    <div class="field">
                        <input id="username_SignIn" name="username" type="text" placeholder="Username" >
                    </div>
                    <div class="field">
                        <input id="passwordi_SignIn" name="password" type="password" placeholder="Password" >
                    </div>
                    <div class="pass-link">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input class="button_signIn" name="signin-btn" type="submit" value="Login" onclick="validationSignIn()">
                    </div>
                    <div class="signup-link">
                        Not a member? <a href="">Signup now</a>
                    </div>
                </form>
                <form action="../configurations/loginconfig/loginVerify.php" method="POST" class="signup">
                    <div class="field">
                        <input id="username_SignUp" name="signup-username" type="text" placeholder="Username" >
                    </div>
                    <div class="field">
                        <input id="lastname_SignUp" name="signup-lastname" type="text" placeholder="Lastname" >
                    </div>
                    <div class="field">
                        <input id="passwordi_SignUp" name="signup-password" type="password" placeholder="Password">
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input class="button_signUp" name="signup-btn" type="submit" value="Signup" onclick="validationSignUp()">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="secondFooter">
        <div class="last-row-copyrights">
            <ul>
                <?php
                if (!isset($_SESSION)) {
                    session_start();
                }

                if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
                    ?>
                    <li><a href="Dashboard/Dashboard.php">Dashboard</a></li>
                    <?php
                }
                ?>
                <li><a href="HomePage.php">Home</a></li>
                <li><a href="Cars.php">Cars</a></li>
                <li><a href="ContactUs.php">Contact Us</a></li>

                <?php
                if (!isset($_SESSION["role"])) {
                    ?>
                    <li><a href="LoginRegister.php">Login</a></li>
                    <?php
                }
                ?>
                <?php
                if (isset($_SESSION["role"])) {
                    ?>
                    <li><a href="../configurations/loginconfig/logout.php">Logout</a></li>
                    <?php
                }
                ?>
            </ul>

            <p style="margin-left: 450px;">© 2022 Rent a Car Co. All Rights Reserved.</p>

        </div>
    </footer>
    <script src="../js/validations.js"></script>
</body>

</html>