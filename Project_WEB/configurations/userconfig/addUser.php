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
                    <i class="fas fa-users-cog"></i>
                    <span class="text">Users Management</span>
                </div>
                <div class="activity">

                    <div class="boxx">
                        <a class="submitAdd" href="#divOne">Add new User</a>
                    </div>
                    <div class="overlay" id="divOne">
                        <div class="wrapper">
                            <h2>User adding form</h2><a class="close" href="#">&times;</a>
                            <div class="content">
                                <div class="containerr">
                                    <?php
                                    require_once '../../configurations/UserMapper.php';
                                    require_once '../../configurations/userconfig/simpleUser.php';
                                    require_once '../../configurations/userconfig/adminUser.php';


                                    if (isset($_POST['submit'])) {
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


                                    }

                                    ?>
                                    <form method="POST">
                                        <label>User First Name</label>
                                        <input name="username" placeholder="User name.." type="text">
                                        <label>User Last Name</label>
                                        <input name="userlastname" placeholder="User last name.." type="text">
                                        <label>User password</label>
                                        <input name="password" placeholder="User password.." type="password">
                                        <label>User role</label>
                                        <input name="role" placeholder="User role.." type="text">
                                        <input name="submit" type="submit" value="Submit">
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