<?php
    $conn = new mysqli('localhost','root','','Buildings');
    if($conn->connect_error)
    {
    echo "Error: " . $conn->connect_error . "\n";
    }
?>