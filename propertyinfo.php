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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
<?php include_once 'includes/templates/header.php'?>
<body>
    <div class="propertyinfo-mid-body">
        <div class="propertyinfo-img">
            <div class="propertyinfo-img-top"></div>
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
                            newImg.classList.add("item");
                            newImg.src=imgRute;
                            list.appendChild(newImg); 
                        });
                    }

                    imgMenu();
                </script>
            </div>
        </div>
        <div class="propertyinfo-data"></div>
    </div>
</body>
<?php include_once 'includes/templates/footer.php'?>
</html>