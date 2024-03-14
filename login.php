<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Agency</title>
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Google Fonts - Montserrat & Oswald -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap">
    <!-- Main CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initializeMap" async defer></script>
</head>
<body class="login-body">
    <img class="login-body-img" src="img/logo.png">
    <main class="login-main">
        <h1>Welcome back</h1>
        <form class="login-form">
            <input type="email" placeholder="email">
        </form>
        <div class="login-button">
            <button type="submit">Continue</button>
        </div>
        <div class="sign-in">
            You still don't have an account?<a href="">Sign In</a>
        </div>
        <div class="login-separator">
            <img src="img/divisor.png"> OR <img src="img/divisor.png">
        </div>
        <div class="link-buttons">
            <button><img src="img/google-logo.png"><p>Continue with google</p></button>
            <button><img src="img/windows-logo.jpg"><p>Continue with Microsoft</p></button>
            <button><img src="img/apple-logo.png"><p>Continue with Apple</p></button>
        </div>
    </main>
</body>