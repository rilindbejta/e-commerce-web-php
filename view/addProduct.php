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

    <?php
        include 'navbar.php';
    ?>

    <div class="container">

    <?php
        include 'sidebar.php';
    ?>
    <section class="content" id="add-product-section">
        <div id="header-container">
            <h1>Add Products</h1>
        </div>
        <div class="" id="form-wrapper">
            <div id="forms-container">
                <form id="btn-container-form" action="../controller/productController.php" method="post">
                    <div class="col-6">
                        <div class="form-control">
                            <span>Enter product's name*</span>
                            <input type="text" name="pName" id="productName" placeholder="Enter product's name">
                        </div>
                        <div class="form-control">
                            <span>Enter product brand*</span>
                            <input type="text" name="pBrand" id="productPrice" placeholder="Enter product brand">
                        </div>
                        <div class="form-control">
                            <span>Enter product price*</span>
                            <input type="number" name="pPrice" id="productPrice" placeholder="Enter product price">
                        </div>
                        <div class="form-control">
                            <span>Enter current product price*</span>
                            <input type="number" name="pCurrentPrice" id="productPrice" placeholder="Enter current product price">
                        </div>
                        <div class="form-control" id="btn-div">
                            <input type="submit" name="addproduct" id="btn-submit" value="Add Product">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-control">
                            <span>Choose 1st image*</span>
                            <input type="text" name="image1" id="productImage" placeholder="Write image path*">
                        </div>
                        <div class="form-control">
                            <span>Choose 2nd image*</span>
                            <input type="text" name="image2" id="productImage" placeholder="Write image path*">
                        </div>
                        <div class="form-control">
                            <span>Choose 3rd image*</span>
                            <input type="text" name="image3" id="productImage" placeholder="Write image path*">
                        </div>
                        <div class="form-control">
                            <span>Choose 4th image*</span>
                            <input type="text" name="image4" id="productImage" placeholder="Write image path*">
                        </div>
                        <div class="form-control">
                            <span>Choose 5th image*</span>
                            <input type="text" name="image5" id="productImage" placeholder="Write image path*">
                        </div>
                        <div class="form-control">
                            <span>Choose 6th image*</span>
                            <input type="text" name="image6" id="productImage" placeholder="Write image path*">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <script src="js/dashboard.js"></script>
</body>
</html>