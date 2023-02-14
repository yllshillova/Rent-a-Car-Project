<?php
require_once '../../configurations/userMapper.php';
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
    include '../../views/Dashboard/sidebar.php';
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
                <div class="activity">

                 
                    <div class="overlay" id="divOne">
                        <div class="wrapper">
                            <h2>User Updating form</h2><a class="close" href="#">&times;</a>
                            <div class="content">
                                <div class="containerr">
                                    <?php
                                    require_once '../UserMapper.php';
                                    $user = new UserMapper();
                                    $id = $_REQUEST['userid'];
                                    $row = $user->editUser($id);
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
                                            $update = $model->updateUser($data);
                                            if ($update) {
                                                echo "<script>alert('record update successfully');</script>";
                                                header('../../views/Dashboard/Usersmanagement.php');
                                            } else {
                                                echo "<script>alert('record update failed');</script>";
                                                header('../../views/Dashboard/Usersmanagement.php');
                                            }
                                        } else {
                                            echo "gabim";
                                            echo "<script>alert('empty');</script>";
                                            header("Location: ../../configurations/userconfig/editUser.php?id=$id");
                                        }
                                    }


                                    ?>
                                    <form method="POST">
                                        <label>User First Name</label>
                                        <input name="username" placeholder="User name.." type="text" value="<?php echo $row['username']; ?>">
                                        <label>User Last Name</label>
                                        <input name="userlastname" placeholder="User last name.." type="text" value="<?php echo $row['userlastname']; ?>">
                                        <label>User password</label>
                                        <input name="password" placeholder="User password.." type="password" value="<?php echo $row['password']; ?>">
                                        <label>User role</label>
                                        <input name="role" placeholder="User role.." type="text" value="<?php echo $row['role']; ?>">
                                        <input name="update" type="submit" value="Submit">
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
<!-- if (isset($_POST['submit'])) {
                                        $username = $_POST['username'];
                                        $userlastname = $_POST['userlastname'];
                                        $password = $_POST['password'];
                                        $role = $_POST['role'];
                                        if ($role == 1) {
                                            $user = new AdminUser(
                                                $username,
                                                $userlastname,
                                                $role,
                                                $password
                                            );

                                            $mapper = new UserMapper();
                                            $mapper->insertUser($user);
                                            header('Location: Usersmanagement.php#');
                                        } else {
                                            $user = new SimpleUser(
                                                $username,
                                                $userlastname,
                                                $role,
                                                $password
                                            );

                                            $mapper = new UserMapper();
                                            $mapper->insertUser($user);
                                            header('Location: Usersmanagement.php#');
                                        }


                                    } -->