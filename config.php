<?php

$hostName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "buurtbag";

// $hostName = "https://buurtbag.nl/phpmyadmin/";
//  $userName = "xr109598_richard";
//  $password = "Gamestop2019!@34";
//  $dbName = "xr109598_richard";

 $conn= new mysqli($hostName,$userName,$password,$dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $membershipStatus = $_POST['membership'];

    // Insert data into the database
    $sql = "INSERT INTO users (naam, adres, email, woon_status) VALUES ('$name', '$address', '$email', '$membershipStatus')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
