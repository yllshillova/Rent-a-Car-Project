<?php 
    include '../userMapper.php';
    $model = new UserMapper();
    $id = $_REQUEST['userid'];
    $delete = $model->deleteUser($id);
 
    if ($delete) {
        header("Location:../../views/Dashboard/UsersManagement.php");
        echo "<script>alert('delete successfully');</script>";
    }
 ?>