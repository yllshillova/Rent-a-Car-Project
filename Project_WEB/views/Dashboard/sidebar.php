<?php 
if (!isset($_SESSION)) {
    session_start();
  }
?>
<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src="images/logo.png" alt="">
        </div>

        <span class="logo_name">Hi, admin</span>
    </div>

    <div class="menu-items">
        <ul class="nav-links">
            <li><a href="Dashboard.php">
                    <i class="fas fa-house-user"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
            <li><a href="Usersmanagement.php">
                    <i class="fas fa-user-cog"></i>
                    <span class="link-name">User Management</span>
                </a></li>
            <li><a href="Carsmanagement.php">
                    <i class="fas fa-car-side"></i>
                    <span class="link-name">Cars Management</span>
                </a></li>
            <li><a href="Bookingsmanagement.php">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="link-name">Bookings Management</span>
                </a></li>
            <li><a href="Clientrepliesmanagement.php">
                    <i class="fas fa-envelope-square"></i>
                    <span class="link-name">Client Replies</span>
                </a></li>
            <li><a href="Contactusmanagement.php">
                    <i class="fas fa-inbox"></i>
                    <span class="link-name">Contact Us Management</span>
                </a></li>

        </ul>

        <ul class="logout-mode">
            <li><a href="../HomePage.php">
                    <i class="fas fa-home"></i>
                    <span class="link-name">Back at home</span>
                </a></li>
            <?php
            if (isset($_SESSION["role"])) {
                ?>
                <li><a href="../../configurations/loginconfig/logout.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="link-name">Logout</span>
                    </a></li>
                <?php
            }
            ?>
        </ul>
    </div>
</nav>