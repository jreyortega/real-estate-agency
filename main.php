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
    <!-- OpenStreetMap -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
<body class="main-body">
    <?php include_once 'php/templates/header.php'?>
    <div class="info-searches">
        <div class="recent-listings">
            <h2>Recent listings</h2>
            <button onclick="window.location.href='recent-listings.html';">See more</button>
        </div>
        <div class="recent-searches">
            <h2>Recent searches</h2>
            <button onclick="window.location.href='recent-listings.html';">See more</button>
        </div>
        <div class="featured-listings">
            <h2>Featured listings</h2>
            <button onclick="window.location.href='featured-listings.html';">See more</button>
        </div>
    </div>
    <div class="about-us">
        <article>
            <h2>About us</h2>
            <p>
                We are a real estate agency founded by two young university students with a shared vision: to offer exceptional housing solutions. 
                Our focus is on innovation and customization, creating homes that reflect the quality, comfort, and lifestyle of our clients. 
                With passion and dedication, we transform each project into a unique experience, providing a comprehensive service that goes beyond traditional 
                real estate market expectations.
            </p>
        </article>
    </div>
    <div id="main-map" class="main-map"></div>
</body>
<?php include_once 'php/templates/footer.php'?>
    <!-- Main JS -->
    <script src="javascript/main.js" charset="utf-8"></script>
</html>
