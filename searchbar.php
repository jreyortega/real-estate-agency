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
<?php include_once 'includes/templates/header.php'?>
<body>
    <?php include_once 'search.php'?>
    <div class="search-property-list">
        <?php include_once 'includes/functions/db_connection.php'?>
        <?php
            // Retrieving search query
            $search_query = isset($_GET['q']) ? $_GET['q'] : '';

            // Constructing SQL query
            $sql = "SELECT * FROM Property WHERE Description LIKE '%" . $search_query . "%'";

            // Executing the query
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Displaying search results
                while($row = $result->fetch_assoc()) {
                    echo "Property ID: " . $row["ID"]. " - Description: " . $row["Description"]. "<br>";
                }
            } else {
                echo "No results found";   
            }

            // Closing the database connection
            $conn->close();
        ?>
    </div>
    <?php include_once 'includes/templates/footer.php'?>
</body>
