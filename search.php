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
<?php include_once 'php/templates/header.php'?>
    <div class="search-mid-body">
        <div class="search-filters">
            <form class="search-filters-form">
                <div class="form-price">
                    <label>Price:</label>
                            <input type="numbers" placeholder="max" required>
                            <input type="numbers" placeholder="min" required>
                    </div>
                    <div class="form-beds">
                        <label>Beds:</label>
                            <input type="number" placeholder="num">
                    </div>
                    <div class="form-baths">
                        <label>Baths:</label>
                            <input type="number" placeholder="num">
                    </div>
                    <div class="form-property-type">
                        <label>Property Type:</label>
                        <div class="house-type">
                                <input class="checkbox-house" type="checkbox">House
                        </div>
                        <div class="flat-type">
                                <input class="checkbox-house" type="checkbox">Flat
                        </div>
                        <div class="townhouse-type">

                                <input class="checkbox-house" type="checkbox">Townhouse
                        </div>
                        <div class="land-type">
                                <input class="checkbox-house" type="checkbox">Land
                        </div>
                        <div class="form-property-facts">
                            <p>Property Facts:</p>
                            <div class="square-feet">
                                <label>Sqr Feet</label>
                                    <input type="numbers" placeholder="max" required>
                                    <input type="numbers" placeholder="min" required>
                            </div>
                            <div class="lot-size">
                                <label>Lot size</label>
                                    <input type="numbers" placeholder="max" required>
                                    <input type="numbers" placeholder="min" required>
                            </div>
                            <div class="year-built">
                                <label>year built</label>
                                    <input type="numbers" placeholder="max" required>
                                    <input type="numbers" placeholder="min" required>
                            </div>     
                        </div>
                    </div>
                </form>
            </form>
        </div>
        <div class="search-map">
            <!-- COMPLETAR -->
        </div>
    </div>
    <div class="search-property-list">
        <!-- COMPLETAR -->
    </div>
    <?php include_once 'php/templates/footer.php'?>
</body>