<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="product_list.css">
</head>

<body>

    <div class="container" id="content">
        <div class="row">
            <div class="col-md-6 my-auto">
                <h1 class="ml-2">Product List</h1>
            </div>
            <div class="col-md-6 my-auto text-right">
                <button class="btn btn-primary"  onclick="window.location.href='addProduct.php';">ADD</button>
                <button class="btn btn-danger" id="delete-product-btn" type="submit">MASS DELETE</button>
            </div>
        </div>
    
        <hr>

        <div class="p-2" id="product_display">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
            <!--Fetch any existing products from database-->
            <?php
                include_once("database_connection.php");
                include_once("product_display.php");

                $fetch_products = new ProductDisplay;
                $product_display = $fetch_products->fetchProductData();
            ?>
            </div>
        </div>

        <div class="row text-center" id="footer">
            <hr>
            <h4 id="footer_title">Scandiweb Test Assignment</h4>
        </div>

    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script rel="text/javascript" src="product_list.js"></script>
</body>
</html>