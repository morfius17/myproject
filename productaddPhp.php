<?php
require('DB.php');
require('productClass.php');

if (isset($_POST['action']) && $_POST['action'] == 'save') {
    $prod=ProductClass::store();
    echo json_encode(array(
           'status' => 200, // success or not?
           'data' => $prod
           ));
    die();
}else{
}

