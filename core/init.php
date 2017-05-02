<?php
$db = mysqli_connect('localhost:8889', 'root', 'root', 'ecommerce');
if (mysqli_connect_errno()) {
    echo 'Database connection failed with following errors: ' . mysqli_connect_errno();
    die();
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/php/ecommerce/config.php';
require_once BASEURL . 'helpers/helpers.php';
