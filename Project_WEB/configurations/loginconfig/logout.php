<?php
 session_start();
session_destroy();
unset($_SESSION['role']);
unset($_SESSION['roleName']);
unset($_SESSION['user']);
header('Location:../../views/LoginRegister.php');
?>