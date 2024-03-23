<?php
    // Create a new mysqli object and establish a connection to the database
    $conn = new mysqli('localhost', 'root', '', 'Buildings');

    // Check if the connection was successful
    if ($conn->connect_error) {
        echo "Error: " . $conn->connect_error . "\n";
    }
?>
