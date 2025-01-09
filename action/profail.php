<?php
require_once '../clasess/db.php';
require_once '../clasess/user.php';
session_start();
$name=$_SESSION['name'];



echo $name;