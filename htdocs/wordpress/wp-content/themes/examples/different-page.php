<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Agency</title>
</head>
<body>
    <?php
        while(have_posts())
        {
            
            the_post();
            echo "<h1>";
                the_title();
            echo "</h1>";
            echo "<h1>";
                the_content();
            echo "</h1>";   
        }
    ?>
</body>
<?php include_once 'includes/templates/footer.php'?>

</html>