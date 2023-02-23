<?php 
if(!isset($_SESSION)){
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../css/HomePage.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>
    <!-- ========= Header =========== -->
 <?php
 include '../components/header.php';
 
 ?>
    <!-- ============= Header ==========  -->
    <!-- ============= Section1 ========== -->
    <section class="section1">
        <div class="slide-bar">
            <div class="img">

                <div class="about-us">
                    <div class="about-content">

                        <h2 class="h2-rent">Rent A Car</h2>
                        <p class="p-rent">Rent a Car is a company founded in 2020.</p>
                        <p class="p-rent">The main activity is the rental of vehicles and their sale throughout the
                            territory of the Republic of Kosovo.</p>
                        <p class="p-rent">We have all types of vehicles, affordable prices, so that driving is as
                            comfortable as possible.</p>
                    </div>
                </div>

                <div class="costumer-rating">
                    <h2 class="h2-costumer-rating">Our customers trust the quality of our service provided</h2>
                    <p class="p-costumer-rating">Currently of 45499 reviews received from our customers, 76% said they
                        were satisfied with the service provided during their car hire</p>
                    <h3 class="h3-costumer-rating">You can rate our work too</h3>
                    <div class="rating">

                        <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                        <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                        <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                        <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                        <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>

                    </div>

                </div>


               


                <div class="rental">
                    <img class="img1" src="../img/flexible-rentals.png" alt="">
                    <div class="flexible-rentals">
                        <h3 class="h3-rental">Flexible rentals</h3>
                        <p class="p-rental">Cancel or change most bookings for free up to 48 hours before pick-up</p>
                    </div>
                    <img class="img2" src="../img/hidden-fees.png" alt="">
                    <div class="hidden-fees">
                        <h3 class="h3-hidden-fees">No hidden fees</h3>
                        <p class="p-hidden-fees">Know exactly what you’re paying</p>
                    </div>
                    <img src="../img/price-match-guarantee.png" alt="">
                    <div class="price-match-guarantee">
                        <h3 class="h3-price-match-guarantee">Price Match Guarantee</h3>
                        <p class="p-price-match-guarantee">Found the same deal for less? We’ll match the price.</p>
                    </div>
                    <div class="booking">
                    <a href="Cars.php">Rent yours now!</a>
                </div>

                </div>

            </div>
        </div>
    </section>
    <!-- =========== Section1 =========== -->

    <!-- =========== Section2 =========== -->

    <main>
        <h1 class="faq-heading">Frequently asked questions</h1>
        <section class="faq-container">
            <div class="faq-one">
                <!-- faq question -->
                <h1 class="faq-page">How old do I need to be to rent a car?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p class="faqs-paragraph">With many rental companies, you must be at least 21 years of age to rent a
                        car, and any driver
                        under 25 may have to pay a Young Driver Fee. Similarly, people aged 70+ may find some companies
                        will charge a Senior Driver Fee, or may not rent to them at all.
                        So car rental for the under-25s or over-70s can be more expensive – which is one more reason to
                        book with Rentalcars.com, as we work with all the big brands. Just check each car’s terms and
                        conditions to see if your age would make any difference.</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-two">
                <!-- faq question -->
                <h1 class="faq-page">Can I book a one-way car rental?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p class="faqs-paragraph">Yes. One-way car rental deals are quite common, as they give people even
                        more freedom to explore
                        and enjoy their rental. However, rental companies will often charge a One Way Fee (or ‘drop
                        charge’) to cover the cost of returning the car to its original location. As the world’s biggest
                        online car rental service, we can help you find a one-way rental car with a low Fee – or no Fee
                        at all.</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-three">
                <!-- faq question -->
                <h1 class="faq-page">Do I need rental car insurance – and what is ‘CDW’ anyway?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p class="faqs-paragraph">Before you buy any car rental insurance, you should find out what coverage
                        is provided by your
                        credit card company, your homeowner’s / renter’s policy, and your own car insurance. This will
                        help you decide what cover you need to buy while booking and picking up your car.
                        CDW means ‘Collision Damage Waiver’; a type of cover that limits your liability for damage to
                        certain parts of a rental car.</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-four">
                <!-- faq question -->
                <h1 class="faq-page">How do I find the cheapest car rental deals?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p class="faqs-paragraph">As the world’s biggest online car rental service, we specialize in finding
                        the cheapest car
                        rental deals from major brands such as Hertz, Avis, Alamo, and Budget. Daily, weekly, or monthly
                        car rentals… just fill in our search form to compare deals from different companies – and find
                        out how much you can save when you rent a car from us.</p>
                </div>
            </div>
            <hr class="hr-line">
        </section>
    </main>
    <!-- ============= Section2 =============== -->
    <div class="importance-of-renting">
        <h1 class="h1-importance">Importance of renting a car instead of buying it</h1>
        <p class="p-importance">
            First of all, renting a car saves you money. One of the main reasons to choose corporate car rental is that
            you don’t need to buy the rental car, so the access to the vehicle doesn’t actually require a bigger amount
            of money. As a result, we can turn our enterprise resources to investments, instead of spend it on a car.

            Secondly, we can save money. If we rent a car for long term, we can receive a discount on the rental fee. We
            don’t have to pay fix costs nor maintenance costs, only the cost of the fuel. Furthermore, the rental fees
            can be an eligible expense in our business.

            Finally, we can save time. Since the cars undergo regular maintenance (for example before rental), we don’t
            have to deal with them ourselves.

            Another advantage is that the rental car is changeable; the repairing costs resulted from proper use is part
            of the rental fee. Thanks to the 24-hour full-service assistance the car will be repaired within an hour
            after reporting the failure or the car rental company provides an exchange car.

            The process of selecting and ordering a car can be arranged online quickly and easily. If we are not willing
            to collect the car, the rental company can deliver it wherever we want them to.
        </p>
    </div>
    <div class="booking1">
                    <a href="Cars.php">Rent yours now!</a>
                </div>
    <div class="slider">
        <span id="slide-1"></span>
        <span id="slide-2"></span>
        <span id="slide-3"></span>
        <div class="image-container">
            <img src="../img/auto9.jpg" class="slide" width="700" height="400" />
            <img src="../img/auto13.jpg" class="slide" width="700" height="400" />
            <img src="../img/auto14.jpg" class="slide" width="700" height="400" />
        </div>
        <div class="buttons">
            <a href="#slide-1"></a>
            <a href="#slide-2"></a>
            <a href="#slide-3"></a>
        </div>
    </div>

<?php

include '../components/footer.php';
?>
    <script src="../js/FAQ's.js"></script>
    <script src="../js/footer.js"></script>
</body>

</html>