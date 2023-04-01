<?php

$db = array();
$db['db_host'] = 'localhost';
$db['db_user'] = 'pansunip_Johnny';
$db['db_password'] = 'adminJohnny19';
$db['db_name'] = 'pansunip_blog';

foreach ($db as $key => $value) {
    # code...
    define(strtoupper($key), $value);
}

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Could not connect to database");


?>

