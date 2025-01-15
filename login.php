
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/Style/login.css">
    <title>Log In | AlgoNest</title>

</head>
<body>
<div id="background">
    <canvas id="particles"></canvas>
</div>


<div class="container">

    <h1 class="logo">AlgoNest 🔥</h1>
    <form action="" method="post">
        <div class="input-container">
            <input type="text" name="username" placeholder=" " required>
            <label>Username</label>
        </div>
        <div class="input-container">
            <input type="password" id="password" name="password" placeholder=" " required>
            <label for="password">Password</label>
            <span class="toggle-password" data-target="password">🙈</span>


        </div>

        <div class="social-login">
            <button class="google-btn">Continue with Google</button>
            <button class="facebook-btn">Continue with Facebook</button>
        </div>

        <a href="signup.php" class="signup-link">Don't have an account? Sign Up</a>
        <input type="submit" value="Log In">

    </form>
</div>

<script>
    // Password Toggle Function
    function togglePassword() {
        const toggleButtons = document.querySelectorAll('.toggle-password');
        toggleButtons.forEach(button => {
            button.addEventListener('click', () => {
                const passwordField = document.getElementById(button.getAttribute('data-target'));
                if (passwordField.type === 'password') {
                    passwordField.type = 'text';
                    button.textContent = '🙉'; // Change icon to hide state
                } else {
                    passwordField.type = 'password';
                    button.textContent = '🙈'; // Change icon back to show state
                }
            });
        });
    }

    // Initialize toggle functionality
    togglePassword();


    // Handle form submission and show loading overlay
    const loginForm = document.getElementById('loginForm');
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent immediate form submission

        // Show loading overlay after a 2-second delay
        setTimeout(function() {
            document.getElementById('loading-overlay').style.display = 'block'; // Display loading overlay
            // Simulate form submission (you can replace this with actual submission logic)
            setTimeout(function() {
                loginForm.submit(); // Submit the form after another 2 seconds
            }, 2000);
        }, 2000);
    });
</script>
</body>
</html>
