<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ecommerce Store</title>

        <!-- Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Ecommerce Store</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Shirt</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Pants</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Shoes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Hats</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Socks</a></li>
                        </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <header>
            <h1 class="text-center home-title">Ecommerce Store</h1>
        </header>

        <div class="container-fluid">
            <div class="col-md-2">
                Left Sidebar
            </div>

            <div class="col-md-8">
                <div class="row">
                    <h2 class="text-center">Featured Products</h2>

                    <div class="col-md-3">
                        <h4>Levis Pants</h4>
                        <img class="img-thumbnail" src="images/products/men4.png" alt="Levis Pants">
                        <p class="list-price text-danger">List Price: <s>$49.99</s></p>
                        <p class="price">Our Price: $39.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>

                    <div class="col-md-3">
                        <h4>Levis Pants</h4>
                        <img class="img-thumbnail" src="images/products/men4.png" alt="Levis Pants">
                        <p class="list-price text-danger">List Price: <s>$49.99</s></p>
                        <p class="price">Our Price: $39.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>

                    <div class="col-md-3">
                        <h4>Levis Pants</h4>
                        <img class="img-thumbnail" src="images/products/men4.png" alt="Levis Pants">
                        <p class="list-price text-danger">List Price: <s>$49.99</s></p>
                        <p class="price">Our Price: $39.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>

                    <div class="col-md-3">
                        <h4>Levis Pants</h4>
                        <img class="img-thumbnail" src="images/products/men4.png" alt="Levis Pants">
                        <p class="list-price text-danger">List Price: <s>$49.99</s></p>
                        <p class="price">Our Price: $39.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>

                    <div class="col-md-3">
                        <h4>Levis Pants</h4>
                        <img class="img-thumbnail" src="images/products/men4.png" alt="Levis Pants">
                        <p class="list-price text-danger">List Price: <s>$49.99</s></p>
                        <p class="price">Our Price: $39.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>

                    <div class="col-md-3">
                        <h4>Levis Pants</h4>
                        <img class="img-thumbnail" src="images/products/men4.png" alt="Levis Pants">
                        <p class="list-price text-danger">List Price: <s>$49.99</s></p>
                        <p class="price">Our Price: $39.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>

                    <div class="col-md-3">
                        <h4>Levis Pants</h4>
                        <img class="img-thumbnail" src="images/products/men4.png" alt="Levis Pants">
                        <p class="list-price text-danger">List Price: <s>$49.99</s></p>
                        <p class="price">Our Price: $39.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                Right Sidebar
            </div>
        </div>

        <footer class="text-center">
            &copy; Copyright 2017 Ecommerce Store
        </footer>

        <!-- Modal -->
        <div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center">Levis Jeans</h4>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="images/products/men4.png" alt="Levis Jeans" class="details img-responsive">
                                </div>
                                <div class="col-sm-6">
                                    <h4>Details</h4>
                                    <p>These are great Jeans! You should buy them!</p>
                                    <hr>
                                    <p>Price: $34.99</p>
                                    <p>Brand: Levis</p>
                                    <form action="add_cart.php" method="post">
                                        <div class="form-group">
                                            <div class="col-xs-3">
                                                <label for="quantity">Quantity:</label>
                                                <input type="text" class="form-control" id="quantity" name="quantity">
                                            </div>
                                            <div class="col-xs-9">
                                            </div>
                                            <p>Available: 3</p>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label for="size">Size:</label>
                                            <select name="size" id="size" class="form-control">
                                                <option value=""></option>
                                                <option value="28">28</option>
                                                <option value="32">32</option>
                                                <option value="36">36</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Javascript -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
