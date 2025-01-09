<?php
require_once '../clasess/db.php';
require_once '../clasess/user.php';

session_start();

if($_SERVER['REQUEST_METHOD']==='POST'){
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
  
    
    $user = new User();
    $user->sign_in($email, $pwd);

    $errors = $user->getErorres();

    if(!empty($errors)){
$_SESSION['errors']=$errors;
$_SESSION['old_input']=$_POST;
header('Location: login.php');
exit();
    }
}



