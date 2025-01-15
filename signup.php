<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | AlgoNest</title>
    <link rel="stylesheet" href="/assets/Style/signup.css">
</head>
<body>
<div class="container">
    <h1 class="logo">AlgoNest 🚀</h1>
    <form action="" method="post" class="sign-up-form">
        <div class="input-container">
            <input type="text" name="full-name" placeholder=" " required>
            <label>Full Name</label>
        </div>
        <div class="input-container">
            <input type="email" name="email" placeholder=" " required>
            <label>Email</label>
        </div>
        <div class="input-container">
            <input type="password" id="password" name="password" placeholder=" " required>
            <label for="password">Password</label>
        </div>
        <div class="input-container">
            <input type="password" id="confirm-password" name="confirm-password" placeholder=" " required>
            <label for="confirm-password">Confirm Password</label>
        </div>
        <div class="social-login">
            <button type="button" class="google-btn">Sign Up with Google</button>
            <button type="button" class="facebook-btn">Sign Up with Facebook</button>
        </div>
        <input type="submit" value="Sign Up">
        <a href="login.php" class="login-link">Already have an account? Log In</a>
    </form>
</div>
</body>
</html>
