<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['user']) || (trim($_SESSION['user']) == '')) {
    header('Location:../../views/LoginRegister.php');
    $_SESSION['message'] = "You must <strong>login</strong> first!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../../css/Dashboard/Usersmanagement.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/Dashboard/tables.css?v=<?php echo time(); ?>">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <title>Users Management</title>
</head>

<body>
    <?php
    include '../../views/Dashboard/message.php';
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
                    <span class="text">Users Management</span>
                </div>
                <div class="activity2">
                    <div class="overlay2" id="divOne">
                        <div class="wrapper2">
                            <h2>User Updating form</h2>
                            <div class="content">
                                <div class="containerr2">
                                    <?php
                                    require_once '../UserMapper.php';
                                    $mapper = new UserMapper();
                                    $id = $_REQUEST['userid'];
                                    $user = $mapper->editUser($id);
                                    if (isset($_POST['update'])) {
                                        if (
                                            isset($_POST['username']) && isset($_POST['userlastname']) &&
                                            isset($_POST['role']) && isset($_POST['password'])
                                        ) {
                                            $data['userid'] = $id;
                                            $data['username'] = $_POST['username'];
                                            $data['userlastname'] = $_POST['userlastname'];
                                            $data['role'] = $_POST['role'];
                                            $data['password'] = $_POST['password'];
                                            $update = $mapper->updateUser($data);
                                            if (
                                                empty($data['username']) || empty($data['userlastname']) || empty($data['role']) || empty($data['password'])
                                            ) {
                                                $_SESSION['message'] = "Update failed, all fields are <strong>required!</strong> Possible loss of data.";
                                                echo "<script>window.location.href = '../../views/Dashboard/Usersmanagement.php';</script>";
                                                return;
                                            } else if (!(empty($data['username']) || empty($data['userlastname']) || empty($data['role']) || empty($data['password']))) {
                                                if ($update) {
                                                    echo "<script>window.location.href = '../../views/Dashboard/Usersmanagement.php';</script>";
                                                } else {
                                                    echo "<script>window.location.href = '../../views/Dashboard/Usersmanagement.php';</script>";
                                                }
                                                return;
                                            }
                                        } else {
                                            $_SESSION['message'] = "Something went <strong>wrong</strong>!";
                                            echo "<script>window.location.href = '../../views/Dashboard/Usersmanagement.php';</script>";
                                        }
                                    }


                                    ?>
                                    <form action="" method="POST">
                                        <label>User First Name</label>
                                        <input name="username" placeholder="User name.." type="text"
                                            value="<?php echo $user['username']; ?>">
                                        <label>User Last Name</label>
                                        <input name="userlastname" placeholder="User last name.." type="text"
                                            value="<?php echo $user['userlastname']; ?>">
                                        <label>User password</label>
                                        <input name="password" placeholder="User password.." type="password"
                                            value="<?php echo $user['password']; ?>">
                                        <label>User role</label>
                                        <input name="role" placeholder="User role.." type="text"
                                            value="<?php echo $user['role']; ?>">
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