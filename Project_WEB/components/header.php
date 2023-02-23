<header>
    <div class="container" id="container">
        <div class="header-container">
            <div class="logo">
                <img src="../img/rentcar.png">
            </div>
            <div class="navbar">
                <ul class="nav-items">
                    <?php
                    if(!isset($_SESSION)){
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
            </div>
        </div>
    </div>
</header>