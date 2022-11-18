<?php require('homePhp.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <title>Products Page</title>
</head>
<body>
        <section class="container mb-xl-2">
            <div class="row">
                <div class="col-xl-12">
                    <h1>Products Page</h1>
                    <ul class="d-flex justify-content-end nav">
                        <li class="nav-item">
                            <a class="btn btn-danger" href="http://proeqti.ge/productadd.php">Add</a>
                        </li>
                        <li class="nav-item">
                            <button type="delete" form="myforma"  id="myform" class="btn btn-primary">Mass Delete</button>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
     <form class="row g-3 mb-5" method="post" id="myforma">
        <input type="hidden" value="delete" name="id">
    <section class="container">
        <div class="row">
            <?php foreach ($products as $element): ?>
                <div class="col-xl-3 mb-xl-3">
                    <div class="card" >
                        <div class="card-body">
                            <input type="checkbox" class="delete.checkbox" name="ids[]" value="<?php echo htmlentities($element['id']);?>"/>
                            <label class="form-check-label" for="flexCheckDefault"></label>
                            <ul>
                                <li><?=$element['sku']?></li>
                                <li><?=$element['name']?></li>
                                <li><?=$element["price"]?>$</li>
                                <?php if ($element['type_id'] == 1): ?>
                                    <li>Size <?=$element["size"]?>MB</li>
                                    <?php elseif($element['type_id'] == 2): ?>
                                        <li>weight <?=$element["weight"]?>kg</li>
                                        <?php elseif($element['type_id'] == 3): ?>
                                            <li>Dimension <?=$element["height"]?>x<?=$element["length"]?>x<?=$element["width"]?></li>
                                            <?php else: ?>
                                            <?php endif ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </section>
            </form>
          <!--         <script src="fun2.js"></script> -->
            </body>
            </html>
