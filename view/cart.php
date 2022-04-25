<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/cart.css">
</head>

<body>
    <?php
    include_once '../view/header.php';
    ?>

    <section>
        <div class="wrapper row">
            <div id="products" class="col-8 row">
                <div class="col-12" id="cart-header">
                    <h3>My Cart</h3>
                    <hr />
                </div>
                <?php
                include_once '../repository/productRepository.php';

                $repository = new ProductRepository();
                $products = $repository->getAllProducts();

                if (isset($_SESSION['cart'])) {
                    foreach ($products as $product) {
                        foreach (array_column($_SESSION['cart'], 'product_id') as $value) {
                            if ($product['id'] == $value) {
                                echo "
                                <div class='col-4 col-md-6 col-sm-12'>
                                    <form>
                                        <div class='product-card'>
                                            <div class='product-card-img'>
                                                <img src='$product[image1]' alt=''>
                                                <img src='$product[image2]' alt=''>
                                            </div>
                                            <div class='product-card-info'>
                                                <div class='product-btn'>
                                                    <button type='button' class='btn-flat btn-hover btn-cart-add'>
                                                        <i class='bx bx-plus'></i>    
                                                    </button>
                                                    <button class='btn-flat btn-hover btn-cart-add'>
                                                        1
                                                    </button>
                                                    <button type='button' class='btn-flat btn-hover btn-cart-add'>
                                                        <i class='bx bx-minus'></i>    
                                                    </button>
                                                    <button class='btn-flat btn-hover btn-cart-add'>
                                                        REMOVE
                                                    </button>
                                                </div>
                                                <div class='product-card-name'>
                                                    $product[name]
                                                </div>
                                                <div class='product-card-price'>
                                                    <span><del>$$product[old_price]</del></span>
                                                    <span class='curr-price'>$$product[current_price]</span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                ";
                            }
                        }
                    }
                }

                ?>
            </div>
            <div id="price-details" class="col-3">
                <div class="col-12" id="cart-header">
                    <h3>Price Details</h3>
                    <hr />
                </div>
                <div class="col-md-6">
                    <?php
                    include_once '../repository/productRepository.php';
                    $repository = new ProductRepository();
                    $products = $repository->getAllProducts();

                    if (isset($_SESSION['cart'])) {
                        $price = 0;
                        $shipping = 10;
                        $subtotal = $price;
                        $count = 0;
                        foreach ($products as $product) {
                            foreach (array_column($_SESSION['cart'], 'product_id') as $value) {
                                if ($product['id'] == $value) {
                                    $price += $product['current_price'];
                                    $count++;
                                }
                            }
                        }
                        $total = $price + $shipping;

                        echo "
                            <div class='price-details-item'>
                                <span>Price ($count items):</span>
                                <span class='curr-price'>$$price</span>
                            </div>
                            <hr />
                            <div class='price-details-item'>
                                <span>Delivery Charges:</span>
                                <span class='curr-price'>$$shipping</span>
                            </div>
                            <hr />
                            <div class='price-details-item'>
                                <span>Total:</span>
                                <span class='curr-price'>$$total</span>
                            </div>
                            <hr />
                        ";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>

</html>