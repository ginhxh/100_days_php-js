<?php
session_start();
$errors = $_SESSION['errors'] ?? [];
$oldInput = $_SESSION['old_input'] ?? [];

unset($_SESSION['errors']);
unset($_SESSION['old_input']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="register.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="hundle_login.php" method="post">
            <div class="deux">
                <label for="email">Email:</label>
                <input 
                    type="email" 
                    name="email" 
                    value="<?= htmlspecialchars($oldInput['email'] ?? '') ?>" 
                    placeholder="Enter your email..">
                <small class="error"><?= $errors['wrong email'] ?? '' ?></small>
            </div>
            <div class="deux deux3">
                <label for="password">Password:</label>
                <input 
                    class="pwd" 
                    type="password" 
                    name="pwd" 
                    placeholder="Enter your password..">
                <small class="error"><?= $errors['wrong pwd'] ?? '' ?></small>
                <i class="fi fi-br-eye eye1 dd"></i>
<i class="fi fi-br-eye-crossed close1"></i>
            </div>
            <p class="a">Already have an account? <a href="register.php">Sign up</a></p>
            <button class="sub" type="submit">Login</button>
        </form>
    </div>
    <script src="regester.js"></script>
</body>
</html>
