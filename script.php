<?php

// set up connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directiondb";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful <br>";
}


// Insert values into the db
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Forward'])) {
        $value = $_POST['Forward'];
            
        $query = "INSERT INTO direction (direction) VALUES ('$value')";
        if ($conn->query($query)) {
                echo "value inserted into database";
        } 
        else {
            echo "error: " . $conn->error;
        }
    }

    elseif (isset($_POST['Left'])) {
        $value = $_POST['Left'];
            
        $query = "INSERT INTO direction (direction) VALUES ('$value')";
        if ($conn->query($query)) {
                echo "value inserted into database";
        } 
        else {
            echo "error: " . $conn->error;
        }
    }

    elseif (isset($_POST['Stop'])) {
        $value = $_POST['Stop'];
            
        $query = "INSERT INTO direction (direction) VALUES ('$value')";
        if ($conn->query($query)) {
                echo "value inserted into database";
        } 
        else {
            echo "error: " . $conn->error;
        }
    }

    elseif (isset($_POST['Right'])) {
        $value = $_POST['Right'];
            
        $query = "INSERT INTO direction (direction) VALUES ('$value')";
        if ($conn->query($query)) {
                echo "value inserted into database";
        } 
        else {
            echo "error: " . $conn->error;
        }
    }

    elseif (isset($_POST['Backward'])) {
        $value = $_POST['Backward'];
            
        $query = "INSERT INTO direction (direction) VALUES ('$value')";
        if ($conn->query($query)) {
                echo "value inserted into database";
        } 
        else {
            echo "error: " . $conn->error;
        }
    }
}

$conn->close();

?>