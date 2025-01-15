<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/Style/style.css">
    <title>AlgoNest</title>
</head>
<body>
<div id="loading-overlay">
    <svg viewBox="0 0 240 240" height="240" width="240" class="pl">
        <circle stroke-linecap="round" stroke-dashoffset="-330" stroke-dasharray="0 660" stroke-width="20" stroke="#000" fill="none" r="105" cy="120" cx="120" class="pl__ring pl__ring--a"></circle>
        <circle stroke-linecap="round" stroke-dashoffset="-110" stroke-dasharray="0 220" stroke-width="20" stroke="#000" fill="none" r="35" cy="120" cx="120" class="pl__ring pl__ring--b"></circle>
        <circle stroke-linecap="round" stroke-dasharray="0 440" stroke-width="20" stroke="#000" fill="none" r="70" cy="120" cx="85" class="pl__ring pl__ring--c"></circle>
        <circle stroke-linecap="round" stroke-dasharray="0 440" stroke-width="20" stroke="#000" fill="none" r="70" cy="120" cx="155" class="pl__ring pl__ring--d"></circle>
    </svg>
</div>
<div class = "grid-container">
    <div class="grid-item header">
        <h1>AlgoNest🔥</h1>
        <form action="login.php" method="POST">
            <button class="ui-btn" type="submit">
                <span>Log In</span>
            </button>
        </form>
    </div>


    <div class="grid-item main-container">
        <div id="particles-js"></div>

        <div id="background">
            <img src="assets/Images/Background.png" alt="Background Image">
        </div>

        <div class="content-wrapper">
            <div class="content-row">
                <img src="assets/Images/Visualize.png" alt="Visualize Icon" class="left-image">
                <h1 class="background-heading">Visualize</h1>
            </div>

            <div class="content-row">
                <h1 class="background-heading">Learn</h1>
                <img src="assets/Images/Learn.png" alt="Learn Icon" class="right-image">
            </div>

            <div class="content-row">
                <img src="assets/Images/Master.png" alt="Master Icon" class="left-image">
                <h1 class="background-heading">Master</h1>
            </div>
        </div>



        <div class="Motto">
            <h2><strong>Welcome to AlgoNest!</strong></h2>
            <h3>"Where Algorithms Take Flight"</h3>
        </div>

        <div class="tooltip-container">
            <span class="tooltip">Learn for Free</span>
            <span class="text">Get Started👆</span>
            <span>Start now👋</span>
        </div>


        <!-- About Section -->

        <div class="about-section">
            <h2>About Us</h2>
            <p>AlgoNest is a platform designed to make learning data structures and algorithms engaging and fun.
                With visually interactive tools, hands-on examples, and step-by-step tutorials, you'll master
                complex topics effortlessly!</p>
        </div>

        <!-- Courses Section -->

        <div class="courses-section">
            <h2>Our Courses</h2>
            <ul>
                <li><strong>Introduction to Data Structures:</strong> Start with the basics of arrays, lists, and stacks.</li>
                <li><strong>Advanced Algorithms:</strong> Learn about graphs, dynamic programming, and more.</li>
                <li><strong>Algorithm Visualization:</strong> See algorithms come to life with real-time animations.</li>
            </ul>
        </div>

    </div>

    <div class="grid-item footer">
        <div class="footer-content">
            <p>© 2025 AlgoNest. All rights reserved.</p>
            <div class="footer-links">
                <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a> | <a href="#">Contact Us</a>
            </div>
        </div>
    </div>


</div>
<script>
    document.querySelector('form').addEventListener('submit', function (e) {
        // Prevent form from submitting immediately
        e.preventDefault();

        // Show the loading overlay
        document.getElementById('loading-overlay').style.display = 'flex';

        // Simulate a short delay (e.g., 2 seconds)
        setTimeout(function() {
            // Submit the form after the delay
            e.target.submit();
        }, 2000); // 2000ms = 2 seconds
    });

</script>



</body>
</html>