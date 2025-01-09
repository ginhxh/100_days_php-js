<?php

require_once 'db.php';

class User{
    private $name;
    private $email;
    private  $number;
    private $pwd;
    private  $pwd_conf;
    private $conn;
    private $erores=[];
public function __construct()
{
    
    
    $db = new Db();
    $this->conn = $db->connect();
}
public function notused_Email($email){
$query="SELECT name from users where email=:email;";
$stmt=$this->conn->prepare($query);
$stmt->bindParam(':email',$email);
$stmt->execute();
if($stmt->rowCount()!==0) {
    $this->erores['used email']= 'this email have been used before';
    return false;
}
else {
    return true;
}

}
public function dontMatchPwd($pwd,$pwd_conf){
if($pwd!==$pwd_conf){
    $this->erores['pwd_difr']= 'Make sure to renter the same password';
    return true;
}
return false;
}

public function checkEmail($email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $this->erores['wrong email']= 'Enter valid email';
    
    }}

    public function check_phone($number){
        $pattern="/^[0-9]{10}$/";
        if(!preg_match($pattern, $number)) {
            $this->erores['wrong number']= 'Enter valid number';

    }}

public function isempty($name,$email,$number,$pwd,$pwd_conf){
    if(empty($name)||empty($email)||empty($number)||empty($pwd)||empty($pwd_conf)){

        $this->erores['empty']='please fill all fildes';
        return true; 
    }
    return false;
}

public function sign_up($name,$email,$number,$pwd,$pwd_conf){



$query='INSERT into users (name,email,phone_number,password) VALUES(:name,:email,:number,:pwd)';
$pwd=password_hash($pwd,PASSWORD_DEFAULT);
$stmt=$this->conn->prepare($query);
$stmt->bindParam(':name',$name);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':number',$number);
$stmt->bindParam(':pwd',$pwd);
$stmt->execute();

}

public function getErorres(){
    return $this->erores;
}

public function sign_in($email,$pwd){
$query='SELECT * from users where email=:email;';
$stmt=$this->conn->prepare($query);
$stmt->bindParam(':email',$email);
$stmt->execute();
$result=$stmt->fetch(PDO::FETCH_ASSOC);
if($result){
if(password_verify($pwd,$result['password'])){
    session_start();
    $_SESSION['user_id'] = $result['id'];
    $_SESSION['name'] = $result['name'];
    $_SESSION['email'] = $result['email'];
    header('Location: profail.php');
    exit;

}else{
    $this->erores['wrong pwd']='wrong pwd';
}


}else{
    $this->erores['wrong email']='no user found';

}

}


}