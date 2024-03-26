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
    <!-- Leaflet map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
<?php include_once 'includes/templates/header.php'?>
<body>
    <div class="propertyinfo-mid-body">
        <div class="propertyinfo-img">
            <div class="propertyinfo-img-top" style="background-image: url('<?php echo $_GET['img']?>/1.jpg');"></div>
                
            <div class="propertyinfo-img-menu-container">
                <button class="slide-button-left" onclick="leftScroll()">◄</button>
                <div class="propertyinfo-img-menu">

                        <script>
                            var img ="<?php echo $_GET['img']?>"
                            console.log(img);
                            var arrayFiles = ["/1.jpg","/2.jpg","/3.jpg","/4.jpg","/5.jpg","/6.jpg","/7.jpg","/8.jpg"];

                            const imgMenu=()=>{

                                var list= document.querySelector(".propertyinfo-img-menu");

                                arrayFiles.forEach(file => {

                                    let newImg = document.createElement("img");
                                    let imgRute=img + file;
                                    newImg.classList.add("item-img");
                                    newImg.src=imgRute;

                                    newImg.addEventListener('click', function(){
                                        document.querySelector('.propertyinfo-img-top').style.backgroundImage = `url(${this.src})`; //Actualizo la imagen del contenedor img-top
                                    });

                                    list.appendChild(newImg); 
                                });
                            }

                            imgMenu();

                            function leftScroll(){
                                var menu=document.querySelector(".propertyinfo-img-menu");
                                menu.classList.add("scroll-animation");
                                menu.scrollBy({left:-200,behavior:"smooth"});
                            }
                            
                            function rightScroll(){
                                var menu=document.querySelector(".propertyinfo-img-menu");
                                menu.classList.add("scroll-animation");
                                menu.scrollBy({left:200,behavior:"smooth"});
                            }
                        </script>
                </div>
                <button class="slide-button-right" onclick="rightScroll()">►</button>
            </div>
        </div>
        <div class="propertyinfo-data">
            <h1>Property characteristics</h1>
            <div class="propertyinfo-data-body">
                <h2>Price:</h2> <h2><?php echo $_GET['price']?></h2>
                <h2>Beds:</h2> <h2><?php echo $_GET['beds']?></h2>
                <h2>Baths:</h2> <h2><?php echo $_GET['baths']?></h2>
                <h2>Type:</h2> <h2><?php echo $_GET['type']?></h2>
                <h2>Sqr feet:</h2> <h2><?php echo $_GET['sqrfeet']?></h2>
                <h2>Lot size:</h2> <h2><?php echo $_GET['lotsize']?></h2>
                <h2>Year built:</h2> <h2><?php echo $_GET['year']?></h2>
            </div>
            <div class="propertyinfo-map">
                <script>

                    var coordx=<?php echo $_GET['coordX']?>
                    var coordy=<?php echo $_GET['coordY']?>
                    var map = L.map('propertyinfo-map').setView([coordx, coordy], 13.5);
                        
                        // Leaflet Map Layer
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);

                        var marker = L.marker([coordx, coordy],{
                        icon: L.icon
                        ({
                            iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon.png', // Default marker icon URL
                            iconSize: [25, 40] // Adjust size as needed
                        }) 
                    });

                    marker.addTo(map);

                </script>
            </div>

        </div>
        
    </div>
</body>
<?php include_once 'includes/templates/footer.php'?>
</html>