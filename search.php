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
    <div class="search-mid-body">
        <div class="search-filters">
            <form class="search-filters-form" action="./search.php" method="post">
                <div class="form-price">
                    <label>Price:</label>
                    <input type="number" id="price-min" name="price-min" placeholder="max" value="0">
                    <input type="number" id="price-max" name="price-max" placeholder="min" value="9999999999">
                </div>
                <div class="form-beds">
                    <label>Beds:</label>
                    <input type="number" id="beds-min" name="beds-min" placeholder="min" value="0">
                    <input type="number" id="beds-max" name="beds-max" placeholder="max" value="9999999">
                </div>
                <div class="form-baths">
                    <label>Baths:</label>
                    <input type="number" id="baths-min" name="baths-min" placeholder="min" value="0" >
                    <input type="number" id="baths-max" name="baths-max" placeholder="max" value="99999999" >
                </div>
                <div class="form-property-type">
                    <label>Property Type:</label>
                    <div class="house-type">
                        <input class="checkbox-house" id="house-type" name="house-type" type="checkbox" checked>House
                    </div>
                    <div class="flat-type">
                        <input class="checkbox-house" id="flat-type" name="flat-type" type="checkbox" checked>Flat
                    </div>
                    <div class="townhouse-type">
                        <input class="checkbox-house" id="townhouse-type" name="townhouse-type" type="checkbox" checked>Townhouse
                    </div>
                    <div class="land-type">
                        <input class="checkbox-house" id="land-type" name="land-type" type="checkbox" checked>Land
                    </div>
                    <div class="form-property-facts">
                        <p>Property Facts:</p>
                        <div class="square-feet">
                            <label>Sqr Feet</label>                       
                            <input type="numbers" id="square-feet-min" name="square-feet-min" placeholder="min" value="0">
                            <input type="numbers" id="square-feet-max" name="square-feet-max" placeholder="max" value="99999999">
                        </div>
                        <div class="lot-size">
                            <label>Lot size</label>                           
                            <input type="numbers" id="lot-size-min" name="lot-size-min" placeholder="min" value="0">
                            <input type="numbers" id="lot-size-max" name="lot-size-max" placeholder="max" value="99999999" >
                        </div>
                        <div class="year-built">
                            <label>year built</label>     
                            <input type="numbers" id="year-built-min" name="year-built-min" placeholder="min" value="0">
                            <input type="numbers" id="year-built-max" name="year-built-max" placeholder="max" value="99999999">
                        </div>     
                    </div>
                </div>
                <button type="subit"> Search </button>
            </form>
        </div>
        <div class="search-map">
            <!-- COMPLETAR -->
        </div>
    </div>
    <div class="search-property-list">
        <?php include_once 'includes/functions/search_form_validation.php'?> 
        <script>
            var arrayProp = <?php echo json_encode($Prop) ?> ;

                const initApp = () =>{

                    var list = document.querySelector(".search-property-list");

                    arrayProp.forEach(value => {

                        let newDiv = document.createElement("div");
                        newDiv.classList.add("item");
                        newDiv.innerHTML = `
                        
                            <img src = "${value.Img}/1.jpg"/>


                        `;
                        list.appendChild(newDiv);
                    })
                }  

                initApp();
        </script>
    </div>
    <?php include_once 'includes/templates/footer.php'?>
</body>
