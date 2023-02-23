<?php 
if (!isset($_SESSION)) {
    session_start();
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