<?php
include '../repository/productRepository.php';

$productRepository  = new ProductRepository();
$productId = $_GET['id'];
$product = $productRepository->getProductsById($productId);


?>
<!DOCTYPE html>
<html lang="en">
<body>

    <?php
        include 'header.php';
    ?>

    <!-- product-detail content -->
    <div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="./index.php">home</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="./products.php">all products</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="./product-detail.php"><?php echo $product['name']?></a>
                </div>
            </div>
            <div class="row product-row">
                <div class="col-5 col-md-12">
                    <div class="product-img" id="product-img">
                        <img src="<?php echo $product['image1'] ?>" alt="">
                    </div>
                    <div class="box">
                        <div class="product-img-list">
                            <div class="product-img-item">
                                <img src="<?php echo $product['image2']?>" alt="">
                            </div>
                            <div class="product-img-item">
                                <img src="<?php echo $product['image2']?>" alt="">
                            </div>
                            <div class="product-img-item">
                                <img src="<?php echo $product['image2']?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7 col-md-12">
                    <div class="product-info">
                        <h1>
                            <?php echo $product['name']?>
                        </h1>
                        <div class="product-info-detail">
                            <span class="product-info-detail-title">Brand:</span>
                            <a href="#"><?php echo $product['brand'] ?></a>
                        </div>
                        <div class="product-info-detail">
                            <span class="product-info-detail-title">Rated:</span>
                            <span class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </span>
                        </div>
                        <p class="product-description">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo libero alias officiis dolore doloremque eveniet culpa dignissimos, itaque, cum animi excepturi sed veritatis asperiores soluta, nisi atque quae illum. Ipsum.
                        </p>
                        <div class="product-info-price"><?php echo $product['current_price'] ?>$</div>
                        <div class="product-quantity-wrapper">
                            <span class="product-quantity-btn">
                                <i class='bx bx-minus'></i>
                            </span>
                            <span class="product-quantity">1</span>
                            <span class="product-quantity-btn">
                                <i class='bx bx-plus'></i>
                            </span>
                        </div>
                        <div>
                            <button class="btn-flat btn-hover">add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    description
                </div>
                <div class="product-detail-description">
                    <button class="btn-flat btn-hover btn-view-description" id="view-all-description">
                        view all
                    </button>
                    <div class="product-detail-description-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit laudantium obcaecati odit dolorem, doloremque accusamus esse neque ipsa dignissimos saepe quisquam tempore perferendis deserunt sapiente! Recusandae illum totam earum ratione.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam incidunt maxime rerum reprehenderit voluptas asperiores ipsam quas consequuntur maiores, at odit obcaecati vero sunt! Reiciendis aperiam perferendis consequuntur odio quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quaerat eum veniam doloremque nihil repudiandae odio ratione culpa libero tempora. Expedita, quo molestias. Minus illo quis dignissimos aliquid sapiente error!
                        </p>
                            <img src="<?php echo $product['image2'] ?>" alt="">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis accusantium officia, quae fuga in exercitationem aliquam labore ex doloribus repellendus beatae facilis ipsam. Veritatis vero obcaecati iste atque aspernatur ducimus.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat quam praesentium id sit amet magnam ad, dolorum, cumque iste optio itaque expedita eius similique, ab adipisci dicta. Quod, quibusdam quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, in corrupti ipsam sint error possimus commodi incidunt suscipit sit voluptatum quibusdam enim eligendi animi deserunt recusandae earum natus voluptas blanditiis?
                        </p>
                            <img src="<?php echo $product['image2'] ?>" alt="">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ullam quam fugit veniam ipsum recusandae incidunt, ex ratione, magnam labore ad tenetur officia! In, totam. Molestias sapiente deserunt animi porro?
                        </p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    review
                </div>
                <div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/person1.png" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">Rilind Bejta</span>
                                <span class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum nisi, rem cum esse perferendis unde error, eaque repellendus totam excepturi quos maiores accusantium exercitationem maxime sunt commodi nostrum eos nam.
                        </div>
                    </div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/person2.png" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">Art Morina</span>
                                <span class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut dolorem, eius adipisci sunt dolor hic corporis cum nesciunt laboriosam aspernatur autem esse, totam qui obcaecati commodi quaerat nam. Totam, laborum!
                        </div>
                    </div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/person3.png" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">Ritvan Murturi</span>
                                <span class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum iure ad dolor dolorum quo iste sed saepe nostrum veniam eum esse sint aliquid numquam expedita sapiente voluptatibus ipsam, quas harum.
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    related products
                </div>
                <div class="row" id="related-products"></div>
            </div>
        </div>
    </div>
    <!-- end product-detail content -->


    <?php
    include 'footer.php';
    ?>

    <!-- app js -->
    <script src="./js/web.js"></script>
    <!-- <script src="./js/product-detail.js"></script> -->

</body>

</html>