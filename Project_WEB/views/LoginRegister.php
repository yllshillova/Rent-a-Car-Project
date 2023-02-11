<!DOCTYPE html>
<!-- Created By CodingNepal -->
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
                    <div class="field">
                        <input id="username_SignIn" name="username" type="text" placeholder="Username" required >
                    </div>
                    <div class="field">
                        <input id="passwordi_SignIn" name="password" type="password" placeholder="Password" required>
                    </div>
                    <div class="pass-link">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input class="button_signIn" name="signin-btn" type="submit" value="Login" >
                    </div>
                    <div class="signup-link">
                        Not a member? <a href="">Signup now</a>
                    </div>
                </form>
                <form action="../configurations/loginconfig/loginVerify.php" method="POST" class="signup">
                    <div class="field">
                        <input id="username_SignUp" name="signup-username" type="text" placeholder="Username" required>
                    </div>
                    <div class="field">
                        <input id="lastname_SignUp" name="signup-lastname" type="text" placeholder="Lastname" required>
                    </div>
                    <div class="field">
                        <input id="passwordi_SignUp" name="signup-password" type="password" placeholder="Password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input class="button_signUp" name="signup-btn" type="submit" value="Signup" >
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="secondFooter">
    <div class="last-row-copyrights">
            <ul>
                <li><a href="HomePage.php">Home</a></li>
                <li><a href="Cars.php">Cars</a></li>
                <li><a href="ContactUs.php">Contact us</a></li>
                <li><a href="LoginRegister.php">Login/Register</a></li>
            </ul>

            <p style="margin-left: 450px;">© 2022 Rent a Car Co. All Rights Reserved.</p>

        </div>
        </footer>
    <script src="../js/validations.js"></script>
</body>

</html>