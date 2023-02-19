
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
    <link rel="stylesheet" href="../../css/Dashboard/ClientRepliesManagement.css?v=<?php echo time(); ?>">
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
                    <i class="fas fa-envelope"></i>
                    <span class="text">Client Replies management</span>

                </div>

                <div class="activity">
                    
                    <div class="table">
                        <table class="styled-table">
                            <thead>
                                <tr>
                                    <th class="heads">Client ID</th>
                                    <th class="heads" style="width: 500px;">Client Message</th>
                                    <th class="heads" >Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                include_once '../../configurations/clientRepliesMapper.php';
                                $mapper = new ClientRepliesMapper();
                                $allReplies = $mapper->getAllClientReplies();
                                foreach ($allReplies as $messages) {
                                    ?>
                                    <tr>
                                        <td class="rows">
                                            <?php echo $messages['client_ID'] ?>
                                        </td>
                                        <td class="rows">
                                            <?php echo $messages['client_message']; ?>
                                        </td>
                                        <td class="rows">
                                            &nbsp;<a
                                                href="../../configurations/clientrepliesconfig/editReply.php?client_ID=<?php echo $messages['client_ID']; ?>"><i
                                                    class="far fa-edit"></i></a> &nbsp;&nbsp;
                                            <a
                                                href="../../configurations/clientrepliesconfig/deleteReply.php?client_ID=<?php echo $messages['client_ID']; ?>"><i
                                                    class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>

                                    <?php
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>

    <script src="../../js/dashboard.js"></script>
</body>

</html>