
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Style/login.css">
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

        <a href="#" class="signup-link">Don't have an account? Sign Up</a>
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

    // Particles Background Animation
    const canvas = document.getElementById('particles');
    const ctx = canvas.getContext('2d');

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    let particlesArray = [];

    class Particle {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.size = Math.random() * 3 + 1;
            this.speedX = Math.random() * 3 - 1.5;
            this.speedY = Math.random() * 3 - 1.5;
        }

        update() {
            this.x += this.speedX;
            this.y += this.speedY;

            // Bounce particles off edges
            if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
            if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;
        }

        draw() {
            ctx.fillStyle = 'rgba(255, 255, 255, 0.7)';
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
    }

    function initParticles() {
        particlesArray = [];
        for (let i = 0; i < 100; i++) {
            particlesArray.push(new Particle());
        }
    }

    function handleParticles() {
        for (let i = 0; i < particlesArray.length; i++) {
            particlesArray[i].update();
            particlesArray[i].draw();
        }
    }

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        handleParticles();
        requestAnimationFrame(animate);
    }

    window.addEventListener('resize', () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        initParticles();
    });

    initParticles();
    animate();
</script>
</body>
</html>
