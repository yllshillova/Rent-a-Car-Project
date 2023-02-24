<?php 
if (!isset($_SESSION)) {
    session_start();
  }
  if (!isset($_SESSION['user']) || (trim($_SESSION['user']) == '')) {
    header('Location:../../views/LoginRegister.php');
    $_SESSION['message'] = "You must <strong>login</strong> first!";
}
    include '../userMapper.php';
    include '../../views/Dashboard/message.php';
    $model = new UserMapper();
    $id = $_REQUEST['userid'];
    $delete = $model->deleteUser($id);
 
    if ($delete) {
        header("Location:../../views/Dashboard/UsersManagement.php");
    }
 ?>