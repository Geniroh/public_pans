<?php



// define("DB_HOST", "localhost");

// define("DB_USERNAME", "root");

// define("DB_PASSWORD", "");

// define("DB_DATABASE", "pans_system_data");



// $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);



// if (!$conn) {

//     die("connection failed:" . mysqli_connect_error());

// }





define("DB_HOST", "localhost");

define("DB_USERNAME", "root");

define("DB_PASSWORD", "");

define("DB_DATABASE", "pans_db1");



$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);



if (!$conn) {

    die("connection failed:" . mysqli_connect_error());

}

