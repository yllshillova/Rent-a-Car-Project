<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../../css/Dashboard/BookingsManagement.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/Dashboard/tables.css?v=<?php echo time(); ?>">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <title>Contact Management</title>
</head>

<body>

    <?php
    include '../../views/Dashboard/actionsSidebar.php';
    ?>
    <section class="dashboard">
        <div class="top">
            <i class="fas fa-bars sidebar-toggle"></i>


        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="fas fa-users-cog"></i>
                    <span class="text">Contact Us Management</span>
                </div>
                <div class="activity">
                    <div class="overlay2" id="divOne">
                        <div class="wrapper2">
                            <h2>Preference Update form</h2>
                            <div class="content">
                                <div class="containerr2">
                                    <?php
                                    require_once '../clientRepliesMapper.php';
                                    $mapper = new ClientRepliesMapper();
                                    $id = $_REQUEST['client_ID'];
                                    $preference = $mapper->editReply($id);
                                    if (isset($_POST['update'])) {
                                        if (
                                            isset($_POST['client_message'])
                                        ) {
                                            $data['client_ID'] = $id;
                                            $data['client_message'] = $_POST['client_message'];
                                            $update = $mapper->updateReply($data);
                                            if ($update) {
                                                echo "<script>alert('Reply updated successfully');</script>";
                                                echo "<script>window.location.href = '../../views/Dashboard/Clientrepliesmanagement.php';</script>";
                                            } else {
                                                echo "<script>alert('Reply update failed');</script>";
                                                echo "<script>window.location.href = '../../views/Dashboard/Clientrepliesmanagement.php';</script>";
                                            }
                                        } else {
                                            echo "<script>alert('empty');</script>";
                                            echo "<script>window.location.href = ' ../../configurations/contactusconfig/editPreference.php?client_ID=$id';</script>";
                                        }
                                    }


                                    ?>
                                    <form action="" method="POST">
                                        <label>Message</label>
                                        <input name="client_message" placeholder="Message.." type="text"
                                            value="<?php echo $preference['client_message'] ?>">
                                        <input name="update" class="submitBtn" type="submit" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </section>

    <script src="../../js/dashboard.js"></script>
</body>



</html>