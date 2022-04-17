<?php
include '../repository/productRepository.php';

$productRepository  = new ProductRepository();
$productId = $_GET['id'];
$product = $productRepository->getProductsById($productId);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Products</title>
    <link rel="stylesheet" href="./css/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/addProducts.css">
</head>
<body>
    <header>
        <nav>
            <ul id="nav-first-ul">
                <li>
                    <a href="adminDashboard.php">
                        <h1>Dashboard</h1>
                    </a>
                </li>
                <ul id="nav-inner-ul">
                    <li>
                        <a href="index.php"><i class='bx bxs-home'></i></a>
                    </li>
                    <li>
                        <a href="index.php"><i class='bx bxs-home'></i></a>
                    </li>
                    <li>
                        <!-- Logout -->
                        <a href="#">Logout</a>
                        <a href="#"><i class='bx bx-log-in'></i></a></a>
                    </li>
                </ul>
            </ul>
        </nav>
    </header>


    <div class="container">

    <?php
        include 'sidebar.php';
    ?>

    <section class="content" id="add-product-section">
        <div style="background-color: lightblue;" id="header-container">
            <h1>Edit Products</h1>
        </div>
        <div class="" id="form-wrapper">
            <div id="forms-container">
                <form id="btn-container-form" action="../controller/productController.php" method="post">
                    <div class="col-6">
                        <div class="form-control">
                            <span>ID*</span>
                            <input type="number" name="id" id="productId" value="<?=$product['id']?>" readonly>
                        </div>
                        <div class="form-control">
                            <span>Enter product's name*</span>
                            <input type="text" name="pName" id="productName" value="<?=$product['name']?>">
                        </div>
                        <div class="form-control">
                            <span>Enter product brand*</span>
                            <input type="text" name="pBrand" id="productPrice" value="<?=$product['brand']?>">
                        </div>
                        <div class="form-control">
                            <span>Enter product price*</span>
                            <input type="number" name="pPrice" id="productPrice" value="<?=$product['old_price']?>">
                        </div>
                        <div class="form-control">
                            <span>Enter current product price*</span>
                            <input type="number" name="pCurrentPrice" id="productPrice" value="<?=$product['current_price']?>">
                        </div>
                        <div class="form-control" id="btn-div">
                            <input style="background-color: blue;" type="submit" name="editProduct" id="btn-submit" value="Update Product">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-control">
                            <span>Choose 1st image*</span>
                            <input type="text" name="image1" id="productImage" value="<?=$product['image1']?>">
                        </div>
                        <div class="form-control">
                            <span>Choose 2nd image*</span>
                            <input type="text" name="image2" id="productImage" value="<?=$product['image2']?>">
                        </div>
                        <div class="form-control">
                            <span>Choose 3rd image*</span>
                            <input type="text" name="image3" id="productImage" value="<?=$product['image3']?>">
                        </div>
                        <div class="form-control">
                            <span>Choose 4th image*</span>
                            <input type="text" name="image4" id="productImage" value="<?=$product['image4']?>">
                        </div>
                        <div class="form-control">
                            <span>Choose 5th image*</span>
                            <input type="text" name="image5" id="productImage" value="<?=$product['image5']?>">
                        </div>
                        <div class="form-control">
                            <span>Choose 6th image*</span>
                            <input type="text" name="image6" id="productImage" value="<?=$product['image6']?>">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <script src="js/dashboard.js"></script>
</body>
</html>

