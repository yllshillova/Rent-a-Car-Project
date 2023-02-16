
<?php

// if(!isset($_SESSION['user']) || (trim ($_SESSION['user']) == '')){
//     header('Location:LoginRegister.php');
// }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <link rel="stylesheet" href="../css/ContactUsStyle.css">
  <link rel="stylesheet" href="../css/HomePage.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="container">
      <div class="content">
        <div class="left-side">
          <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Address</div>
            <div class="text-one">Prishtina, 10000</div>
            <div class="text-two">Kosova 1923</div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Phone</div>
            <div class="text-one">+383 49 222 333</div>
            <div class="text-two">0800 20 300</div>
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">rentacar@gmail.com</div>
            <div class="text-two">info.rentacar@gmail.com</div>
          </div>
        </div>
        <div class="right-side">
          <div class="topic-text">Send us a message</div>
          <p></p>
          <form action="#">
            <div class="input-box">
              <input id="name" type="text" placeholder="Enter your full name" required>
            </div>
            <div class="input-box">
              <input id="emaili" type="text" placeholder="Enter your email" required>
            </div>
            <div class="input-box message-box">
              <textarea id="textarea_message" placeholder="Your message for us..." required></textarea>
            </div>
            <div class="button">
              <input type="button" value="Send Now" onclick="validationContactUs()">
            </div> 
          </form>
        </div>
      </div>
      <div class="last-row-copyrights">
            <ul>
            <?php
            session_start();
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

            <p>© 2022 Rent a Car Co. All Rights Reserved.</p>

        </div>
    </div>
    
    <script src="../js/contact-us.js"></script>
</body>

</html>