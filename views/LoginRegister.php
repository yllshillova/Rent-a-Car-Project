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
                <form action="#" class="login">
                    <div class="field">
                        <input id="emaili_SignIn" type="text" placeholder="Email Address" required >
                    </div>
                    <div class="field">
                        <input id="passwordi_SignIn" type="password" placeholder="Password" required>
                    </div>
                    <div class="pass-link">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input class="button_signIn" type="submit" value="Login" onclick="validationSignIn()">
                    </div>
                    <div class="signup-link">
                        Not a member? <a href="">Signup now</a>
                    </div>
                </form>
                <form action="#" class="signup">
                    <div class="field">
                        <input id="emaili_SignUp" type="text" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input id="passwordi_SignUp" type="password" placeholder="Password" required>
                    </div>
                    <div class="field">
                        <input id="confirmPasswordi_SignUp" type="password" placeholder="Confirm password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input class="button_signUp" type="submit" value="Signup" onclick="validationSignUp()">
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