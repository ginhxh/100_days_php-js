<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="form-container">
        <h2>Register</h2>
        <form action="#" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="">

            <label for="password">Password:</label>
            <input type="password" id="password" name="pwd" value="">

            <label for="password">Confirme Password:</label>
            <input type="password" id="password" name="pwd_conf" value="">

            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Sign in</a></p>
    </div>

</body>
</html>
