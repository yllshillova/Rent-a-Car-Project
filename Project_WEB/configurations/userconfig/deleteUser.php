<?php 
    include '../userMapper.php';
    $model = new UserMapper();
    $id = $_REQUEST['userid'];
    $delete = $model->deleteUser($id);
 
    if ($delete) {
        echo "<script>alert('delete successfully');</script>";
    }
 ?>