<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bookings.css">
    <link rel="stylesheet" href="../css/HomePage.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
    <div class="row">
        <div class="col-75">
          <div class="container">
            <form action="/action_page.php">
      
              <div class="row">
                <div class="col-50">
                  <h3>Billing Address</h3>
                  <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" id="email" name="email" placeholder="john@example.com">
                  <label for="adr"><i class="fa fa-address-card"></i> Address</label>
                  <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                  <label for="city"><i class="fa fa-university"></i> City</label>
                  <input type="text" id="city" name="city" placeholder="New York">
      
                  <div class="row">
                    <div class="col-50">
                      <label for="state">Check-in Date</label>
                      <input type="date" id="checkin-date" name="checkin" required>
                    </div>
                    <div class="col-50">
                      <label for="zip">Check-out Date</label>
                      <input type="date" id="checkout-date" name="checkout" required>
                    </div>
                  </div>
                  
              <input type="submit" id="bookCar" value="Book your car now!" class="btn">
                </div>
      
                <div class="col-50">
                  <h3>Payment</h3>
                  <label for="fname">Accepted Cards</label>
                  <div class="icon-container">
                    <i class="fab fa-cc-visa" style="color:navy;"></i>
                    <i class="fab fa-cc-amex" style="color:blue;"></i>
                    <i class="fab fa-cc-mastercard" style="color:red;"></i>
                    <i class="fab fa-cc-discover" style="color:orange;"></i>
                  </div>
                  <label for="cname">Name on Card</label>
                  <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                  <label for="ccnum">Credit card number</label>
                  <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                  <label for="expmonth">State</label>
                  <input type="text" id="state" name="state" placeholder="NY">
      
                  <div class="row">
                    <div class="col-50">
                      <label for="expyear">Zip</label>
                      <input type="text" id="zip" name="zip" placeholder="10000">
                    </div>
                    <div class="col-50">
                      <label for="cvv">CVV</label>
                      <input type="text" id="cvv" name="cvv" placeholder="352">
                    </div>
                  </div>
              <input type="submit" value="Cancel!" class="btn1" onclick="window.history.go(-1); return false;" >
                </div>
      
              </div>
              
            </form>
          </div>
        </div>
      <!-- to be updated  -->
        <div class="col-25">
          <div class="container">
            <h4>Cart
              <span class="price" style="color:black">
                <i class="fa fa-shopping-cart"></i>
                <b>4</b>
              </span>
            </h4>
            <p><a href="#">Product 1</a> <span class="price">$15</span></p>
            <p><a href="#">Product 2</a> <span class="price">$5</span></p>
            <p><a href="#">Product 3</a> <span class="price">$8</span></p>
            <p><a href="#">Product 4</a> <span class="price">$2</span></p>
            <hr>
            <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
          </div>
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
</body>
</html>