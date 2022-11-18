<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
// require('DB.php');
// // var_dump($result);



Class ProductClass
{
    public static $required = [
        'sku',
        'name',
        'price',
        'type_id',
    ];

    public static $types_fileds = [
        'type_id_1' => [
            'size',
        ],
        'type_id_2' => [
            'weight',
        ],
        'type_id_3' => [
            'width',
            'height',
            'length',
        ],
    ];

    public static function store(){
        global $conn;

// validate inputs
        $errors = [];
        foreach (self::$required as $key => $value) {
            if (isset($_POST[$value]) && empty($_POST[$value])) {
                $errors[$value] = 'requred';
            }
            if ($value == 'type_id' && isset($_POST['type_id'])) {
                foreach (self::$types_fileds['type_id_'.$_POST['type_id']] as $value) {
                    if (isset($_POST[$value]) && empty($_POST[$value])) {
                        $errors[$value] = 'requred';
                    }
                }
            }
        }
        if (count($errors)) {
            return [
                'errors' => $errors,
                'old' => $_POST,
            ];
        }
        $sku= $_POST["sku"];
        $name= $_POST["name"];
        $price= $_POST["price"];
        $size= $_POST["size"];
        $type_id= $_POST["type_id"];
        $weight= $_POST["weight"];
        $height= $_POST["height"];
        $width= $_POST["width"];
        $length= $_POST["length"];



        $sql = "INSERT INTO products (sku, name,price,size,type_id,weight,height,width,length)
        VALUES ('$sku','$name','$price','$size','$type_id','$weight','$height','$width','$length')";


        if ($conn->query($sql) === TRUE) {

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        return $_POST;
    }

    public static function delete(){

        global $conn;
        if(isset($_POST["ids"]) && !empty($_POST["ids"])){
            $all = implode(",", $_POST["ids"]);
            $sql =mysqli_query($conn,"DELETE FROM products WHERE id in ($all)");
            if($sql){
            // Records deleted successfully. Redirect to landing page
                header("location: home.php");
                exit();
            } else{
                // echo "Oops! Something went wrong. Please try again later.";
            }

        }
    }
    public static function all(){
        global $conn;
        $sql = "SELECT * FROM products" ;
        $result = $conn->query($sql);
        $products = $result->fetch_all(MYSQLI_ASSOC);
        return $products;
    }
};


