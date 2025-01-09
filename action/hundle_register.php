<?php
require_once '../clasess/db.php';
require_once '../clasess/user.php';

session_start();


if($_SERVER['REQUEST_METHOD']==='POST')
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $pwd=$_POST['pwd'];
    $pwd_conf=$_POST['pwd_conf'];


    $user=new User();
    if(!$user->isempty($name,$email,$number,$pwd,$pwd_conf)&&
    $user->notused_Email($email)&&!$user->dontMatchPwd($pwd,$pwd_conf)){

 

        $user->sign_up($name,$email,$number,$pwd,$pwd_conf);
header('locaion: register.php');
$erores=$user->getErorres();
exit;
    
}else{
$_SESSION['erors']=$user->getErorres();
$_SESSION['old_input']=$_POST;
header('Location: register.php');
exit;

}

}


