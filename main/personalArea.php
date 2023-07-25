<?php
require_once ('../app/Auth.php');
$userCheck= new Auth();
$userCheck->checkUser($_POST['email'], $_POST['password']);
$userCheck->viewUser();
?>


