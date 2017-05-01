<?php
$db = mysqli_connect('localhost:8889', 'root', 'root', 'ecommerce');
if (mysqli_connect_errno()) {
    echo 'Database connection failed with following errors: ' . mysqli_connect_errno();
    die();
}

define('BASEURL', '/php/ecommerce/');
