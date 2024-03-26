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
<body>
    <?php
        // Check if the form was submitted and the request method is POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $price_max=$_POST['price-max'];
            $price_min=$_POST['price-min'];
            $beds_max=$_POST['beds-max'];
            $beds_min=$_POST['beds-min'];
            $baths_max=$_POST['baths-max'];
            $baths_min=$_POST['baths-min'];
            $prop_types=$_POST['prop-types'];
            $square_feet_max=$_POST['square-feet-max'];
            $square_feet_min=$_POST['square-feet-min'];
            $lot_size_max=$_POST['lot-size-max'];
            $lot_size_min=$_POST['lot-size-min'];
            $year_built_max=$_POST['year-built-max'];
            $year_built_min=$_POST['year-built-min'];
        } else {
            // Redirect to the search page
            header("Location: search.php");
        }

        // Get the properties from the database
        try {
            require_once('includes/functions/db_connection.php');
            $sql = "SELECT *
            FROM Property
            ORDER BY ID";
            $results = $conn->query($sql);
        } catch(\Exception $e) {
            echo $e->getMessage();
        }

        // Check if the property meets the search criteria
        while($row = $results->fetch_assoc()) {
            if($price_max > $row['Price'] && $price_min < $row['Price'] 
                && $beds_max > $row['Beds'] && $beds_min < $row['Beds']
                && $baths_max > $row['Baths'] && $baths_min < $row['Baths']
                && $square_feet_max > $row['Sqrfeet'] && $square_feet_min < $row['Sqrfeet']
                && $lot_size_max > $row['Lotsize'] && $$lot_size_min < $row['Lotsize']
                && $year_built_max > $row['Year'] && $year_built_min < $row['Year'])
            {
                $Prop[]=$row;
            }
        }

        foreach($prop_types as $prop_type) {
            foreach($Prop as $property) {
                if($property['Type'] == $prop_type) {
                    $filtered_properties[] = $property;
                }
            }
        }

        $conn->close();
    ?>
</body>
