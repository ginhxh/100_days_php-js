<?php
session_start();
$errors=$_SESSION['erors']?? [];
$old_input=$_SESSION['old_input'] ?? [];

unset($_SESSION['erors']);
unset($_SESSION['old_input']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="register.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
</head>
<body>
    <div class="container">
 <h1>Sign up</h1>
<form action="hundle_register.php" method="post">
    <div class="deux">
    <label for="">Name:</label>
<input type="text" name="name" value="<?=$old_input['name']?? ''; ?>" placeholder="Enter your fullname..">
<small class="error"><?= $errors['empty'] ?? '' ?></small>

    </div>
    <div class="deux">
    <label for="">email:</label>
<input type="email" name="email"  value="<?=$old_input['email']?? ''; ?>" placeholder="Enter your email..">
<small class="error"><?= $errors['empty'] ?? '' ?></small>
<small class="error"><?= $errors['wrong email'] ?? '' ?></small>
<small class="error"><?= $errors['used email'] ?? '' ?></small>

    </div> 
    <div class="deux">
 
    <label for="">Phone Number:</label>
<input type="text" name="number"  value="<?=$old_input['number']?? ''; ?>" placeholder="Enter your Phone number..">
<small class="error"><?= $errors['empty'] ?? '' ?></small>
<small class="error"><?= $errors['wrong number'] ?? '' ?></small>

    </div>


    <div class="deux deux2">
    <label for="">password:</label>
<input class="pwd" type="password" name="pwd"  value="<?=$old_input['pwd']?? ''; ?>" placeholder="Create Paswword..">
<small class="error"><?= $errors['empty'] ?? '' ?></small>

<i class="fi fi-br-eye eye1 dd"></i>
<i class="fi fi-br-eye-crossed close1"></i>

    </div>
    
    
    
    <div class="deux">
    <label for="">Conform Password:</label>
<input class="conf" type="password" name="pwd_conf"  value="<?=$old_input['pwd_conf']?? ''; ?>" placeholder="Conform Password you Created..">
<small class="error"><?= $errors['empty'] ?? '' ?></small>
<small class="error"><?= $errors['pwd_difr'] ?? '' ?></small>

<i class="fi fi-br-eye eye2 dd"></i>
<i class="fi fi-br-eye-crossed close2"></i>
</div>
<p class="a"> alerady have an account <a href="login.php">Log in</a></p>
<button class="sub" type="submit">Register</button>


</form>
</div>
<script src="regester.js"></script>
</body>
</html>