<!DOCTYPE html>
<html>
<head>
    <title>Product Add</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="product_add.css">
</head>

<body>

    <div class="container" id="content">
        <div class="row">
            <div class="col-md-6 my-auto">
                <h1 class="ml-2">Product Add</h1>
            </div>
            <div class="col-md-6 my-auto text-right">
                <button class="btn btn-primary" type="submit" form="product_form">Save</button>
                <button class="btn btn-danger" id="cancel" onclick="window.location.href='index.php';">Cancel</button>
            </div>
        </div>
    
        <hr>

        <div class="row">
            <form id="product_form" class="p-5" method="POST" action="add_new_Product.php">
                <!--SKU attribute-->
                <div class="form-group row">
                    <label for="sku" class="col-md-2 control-label my-auto">SKU</label>
                    <div class="col-md-10 my-auto">
                        <input type="text" pattern=".*"  class="form-control w-25" id="sku" placeholder="SKU" name="sku" required>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <!--Name attribute-->
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label my-auto">Name</label>
                    <div class="col-md-10">
                      <input type="text" pattern=".*" maxlength="32" class="form-control w-25" id="name" placeholder="Name" name="name" required>
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                  <!--Price attribute-->
                  <div class="form-group row">
                    <label for="price" class="col-md-2 col-form-label my-auto">Price $</label>
                    <div class="col-md-10">
                      <input type="number" min="1" class="form-control w-25" id="price" placeholder="Price" name="price" required>
                      <div class="invalid-feedback"></div>
                    </div>
                </div>

                <!--Type Switcher-->
                <div class="form-group row">
                    <label for="productType" class="col-md-2 col-form-label my-auto">Product Type</label>
                    <div class="col-md-10">
                        <select class="form-select w-25" id="productType" name="productType">
                            <option selected>Type Switcher</option>
                            <option value="DVD" id="DVD">DVD-disc</option>
                            <option value="Furniture" id="Furniture">Furniture</option>
                            <option value="Book" id="Book">Book</option>
                        </select>
                    </div>
                </div>

                <!--Size special attribute-->
                <div class="form-group row d-none" id="size_option">
                    <label for="size" class="col-md-2 col-form-label my-auto">Size (MB)</label>
                    <div class="col-md-10">
                      <input type="number" min="1" class="form-control w-25" id="size" placeholder="MB" name="size">
                      <div class="invalid-feedback"></div>
                    </div>
                    
                </div>

                <!--Dimensions special attribute-->
                <div class="d-none" id="dimensions_option">
                    <!--Furniture height-->
                    <div class="form-group row">
                        <label for="height" class="col-md-2 col-form-label my-auto">Height (CM)</label>
                        <div class="col-md-10">
                            <input type="number" min="1" class="form-control w-25" id="height" placeholder="CM" name="height">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <!--Furniture width-->
                    <div class="form-group row">
                        <label for="width" class="col-md-2 col-form-label my-auto">Width (CM)</label>
                        <div class="col-md-10">
                            <input type="number" min="1" class="form-control w-25" id="width" placeholder="CM" name="width">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <!--Furniture length-->
                    <div class="form-group row">
                        <label for="length" class="col-md-2 col-form-label my-auto">Length (CM)</label>
                        <div class="col-md-10">
                            <input type="number" min="1" class="form-control w-25" id="length" placeholder="CM" name="length">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                </div>

                <!--Weight special attribute-->
                <div class="form-group row d-none" id="weight_option">
                    <label for="weight" class="col-md-2 col-form-label my-auto">Weight (KG)</label>
                    <div class="col-md-10">
                      <input type="number" min="1" class="form-control w-25" id="weight" placeholder="KG" name="weight">
                      <div class="invalid-feedback"></div>
                    </div>
                </div>

            </form>
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
    <script type="text/javascript" src="product_add.js"></script>
</body>
</html>