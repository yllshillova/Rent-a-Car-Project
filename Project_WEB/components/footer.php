<footer>
    <div class="footer-firstDiv">
        <img src="../img/rentcar.png" alt="">

        <div class="qualify-certificates">
            <h3 class="h3-qc">Quality certificates</h3>
            <img src="../img/qualified1.webp" alt="">
            <img src="../img/qualified2.webp" alt="">
            <img src="../img/qualified3.svg" alt="">
        </div>
        <?php
        require_once '../configurations/clientRepliesMapper.php';
        require_once '../configurations/clientrepliesconfig/reply.php';
        if (isset($_POST['submit'])) {
            $client_message = $_POST['client_message'];
            $reply = new Reply(
                $client_message
            );
            $mapper = new ClientRepliesMapper();
            $mapper->insertReply($reply);
        }
        ?>
        <div class="send-message ">
            <form action="#" method="POST">
                <h3 class="h3-message">Leave us a message</h3>
                <textarea id="send_message" name="client_message" id="message" cols="30" rows="5"
                    placeholder="How was ur experience..."></textarea>
                <input name="submit" type="submit" id="send" value="Send">
            </form>
        </div>
    </div>
    <hr>

    <div class="last-row-copyrights">
        <ul>
            <?php
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
</footer>