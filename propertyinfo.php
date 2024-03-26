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
    <script src="https://kit.fontawesome.com/f4ea149574.js" crossorigin="anonymous"></script>
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
            <div id="propertyinfo-map" class="propertyinfo-map">
                <script>
                    var coordX="<?php echo $_GET['coordX']?>"
                    var coordY="<?php echo $_GET['coordY']?>"

                    console.log(coordX);
                    console.log(coordY);
                    
                    var map = L.map('propertyinfo-map').setView([51.505, -0.09], 13.5);

                    // Leaflet Map Layer
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    }).addTo(map);

                    // Leaflet Map Marker with default icon made bigger
                    var marker = L.marker([51.505, -0.09], {
                        icon: L.icon({
                            iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon.png', // Default marker icon URL
                            iconSize: [25, 40] // Adjust size as needed
                        })
                    }).addTo(map);
                </script>
            </div>
        </div>       
    </div>
    <div class="comments-box">
        <h1>Comments Box</h1><br>
        </div class="comments">
        </div>
        <form class="comments-form" action="./propertyinfo.php" method="post">
            <div class="form-name">
                    <label>Introduce your name</label><br>
                    <input type="text" name="name" id="name">
            </div>
            <div class="form-text">
                    <label>Introduce your comment</label><br>
                    <input type="text" name="text" id="text">
            </div>
            <button type="submit"> Send comment</button>
        </form>
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name=$_POST['name'];
                $text=$_POST['text'];
            } else {
                // Redirect to the search page
                header("Location: propertyinfo.php");
            }
            $id=$_GET['id'];
            try {
                require_once('includes/functions/db_connection.php');
                $sql = "INSERT INTO Comments 
                (ID_property, Name, Text, Date) 
                VALUES ('$id','$name','$text', CURRENT_TIMESTAMP)";
            } catch(\Exception $e) {
                echo $e->getMessage();
            }
            
            $conn->close();
        ?>
    </div>
</body>
<?php include_once 'includes/templates/footer.php'?>
</html>