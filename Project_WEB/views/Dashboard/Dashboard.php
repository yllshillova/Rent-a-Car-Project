
<?php
session_start();
// if(!isset($_SESSION['user']) || (trim ($_SESSION['user']) == '')){
//     header('Location:../LoginRegister.php');
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../../css/Dashboard/Dashboard.css?v=<?php echo time(); ?>">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <title>Admin Dashboard Panel</title>
</head>

<body>
    <?php
    include 'sidebar.php';
    ?>
    <section class="dashboard">
        <div class="top">
            <i class="fas fa-bars sidebar-toggle"></i>


        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="fas fa-house-user"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="far fa-thumbs-up"></i>
                        <span class="text">Total Visitors</span>
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box2">
                        <i class="far fa-comments"></i>
                        <span class="text">Comments</span>
                        <span class="number">20,120</span>
                    </div>
                    <div class="box box3">
                        <i class="fas fa-share-square"></i>
                        <span class="text">Total Shares</span>
                        <span class="number">10,120</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="far fa-clock"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list">Johnson Williams</span>
                        <span class="data-list">Brown Jones</span>
                        <span class="data-list">Garcia Miller</span>
                        <span class="data-list">Davis Rodriguez</span>
                        <span class="data-list">Martinez Wilson</span>
                        <span class="data-list">Lopez Anderson</span>
                        <span class="data-list">Taylor Thomas</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">johnsonwilliams@gmail.com</span>
                        <span class="data-list">brownjones@gmail.com</span>
                        <span class="data-list">garciamiller@gmail.com</span>
                        <span class="data-list">davisrodriguez@gmail.com</span>
                        <span class="data-list">martinezwilson@gmail.com</span>
                        <span class="data-list">lopezanderson@gmail.com</span>
                        <span class="data-list">taylorthomas@gmail.com</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-15</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Active</span>
                        <span class="data-list">Active</span>
                        <span class="data-list">Active</span>
                        <span class="data-list">Active</span>
                        <span class="data-list">Active</span>
                        <span class="data-list">Active</span>
                        <span class="data-list">Active</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../../js/dashboard.js"></script>
</body>

</html>