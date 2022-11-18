<?php require('productaddPhp.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="my.css">
    <title>product add Page</title>
</head>
<body>
    <section class="container mb-xl-12">
        <div class="row">
            <div class="col-xl-12">
                <h1 >product add Page</h1>
                <ul class="d-flex justify-content-end nav">
                    <li class="nav-item">
                        <button class="btn btn-primary" id="submitFrom" form="myform">Save</button>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger" href="http://proeqti.ge/home.php">Cancel</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <form class="row g-3 mb-5" method="post" id="myform">
        <input type="hidden" value="save" name="action">
        <div class="col-md-8">
            <label for="prodname" class="form-label">Sku</label>
            <input type="text" name="sku" class="form-control " value="" id="inputsku"placeholder="Please, provide Sku">
            <div id="validationinputsku" class="invalid-feedback">
                Please, provide Sku.
            </div>
        </div>
        <div class="col-md-8">
            <label for="prodname" class="form-label">Name</label>
            <input type="text" name="name" class="form-control " id="inputname"value=""placeholder="Please, provide Name">
            <div id="validationinputname" class="invalid-feedback">
                Please, provide Name.
            </div>
        </div>
        <div class="col-8">
            <label for="prodprice" class="form-label">Price</label>
            <input type="text" name="price" class="form-control " id="inputprice" value=""placeholder="Please, provide Price">
            <div id="validationinputprice" class="invalid-feedback">
                Please, provide Price.
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Type Switcher</label>
            <select name="type_id" id="inputState" class="form-select">
                <option  value="" selected="selected"> Please choose product </option>
                <option  value="1"> DVD </option>
                <option  value="3">Furniture</option>
                <option  value="2">Book</option>
            </select>
        </div>
        <div class="row product_types">
            <div class="col-xl-6 d-none" id="1">Size(MB)
                <input name="size" type="text" value="" placeholder="Please, provide Size(MB)">
            </div>
            <div class="col-xl-6 d-none" id="3">
                <div>Height
                    <input name="height" type="text" value="" placeholder="Please, provide Height">
                </div>
                <div>Width
                    <input name="width" type="text" value="" placeholder="Please, provide Width">
                </div>
                <div>Length
                    <input name="length" type="text" value="" placeholder="Please, provide Length">
                </div>
            </div>
            <div class="col-xl-6 d-none" id="2">weight(Kg)
                <input name="weight" type="text" value="" placeholder="Please, provide Weight">
            </div>
        </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">"></script>
    <script src="fun.js"></script>
</body>
</html>
