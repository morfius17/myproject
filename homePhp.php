<?php
require('DB.php');
require('productClass.php');
$products = ProductClass::all();
if (isset($_POST['id']) && $_POST['id'] == 'delete') {
    $prod=ProductClass::delete();
}




