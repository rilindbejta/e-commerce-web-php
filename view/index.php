<!DOCTYPE html>
<html lang="en">

<body>

    <?php
    include 'header.php';
    
    if (isset($_POST['addCart']) && isset($_SESSION['userId'])) {
        if (!isset($_SESSION['cart'])) {
            $item_array = array('product_id' => $_POST['product_id'],);

            $_SESSION['cart'][0] = $item_array;
        } else {
            $item_array_id = array_column($_SESSION['cart'], "product_id");

            if (in_array($_POST['product_id'], $item_array_id)) {
                echo "<script>alert('Product is already added in the cart')</script>";
                echo "<script>window.location = 'index.php'</script>";
            } else {
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );
                $_SESSION['cart'][$count] = $item_array;
            }
        }
    }

    ?>

    <!-- hero section -->
    <div class="hero">
        <div class="slider">
            <div class="container">
                <!-- slide item -->
                <div class="slide active">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                CYBERPOWERPC Gamer Supreme Liquid Cool Gaming PC
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Next-gen design
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolor commodi dignissimos culpa, eaque eos necessitatibus possimus veniam, cupiditate rerum deleniti? Libero, ducimus error? Beatae velit dolore sint explicabo! Fugit.
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover">
                                    <span>shop now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img top-down">
                        <img src="./images/images-web/desktop1.png" alt="">
                    </div>
                </div>
                <!-- end slide item -->
                <!-- slide item -->
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                Alienware 27 Gaming Monitor - AW2721D
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Next-gen design
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A optio, voluptatum aperiam nobis quis maxime corporis porro alias soluta sunt quae consectetur aliquid blanditiis perspiciatis labore cumque, ullam, quam eligendi!
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover">
                                    <span>shop now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img right-left">
                        <img src="./images/images-web/monitor3.jpg" alt="">
                    </div>
                </div>
                <!-- end slide item -->
                <!-- slide item -->
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                Acer Nitro 5 AN515-55-53E5 Gaming Laptop
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Next-gen design
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo aut fugiat, libero magnam nemo inventore in tempora beatae officiis temporibus odit deserunt molestiae amet quam, asperiores, iure recusandae nulla labore!
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover">
                                    <span>shop now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img left-right">
                        <img src="./images/images-web/laptop2.jpg" alt="">
                    </div>
                </div>
                <!-- end slide item -->
            </div>
            <!-- slider controller -->
            <button class="slide-controll slide-next">
                <i class='bx bxs-chevron-right'></i>
            </button>
            <button class="slide-controll slide-prev">
                <i class='bx bxs-chevron-left'></i>
            </button>
            <!-- end slider controller -->
        </div>
    </div>
    <!-- end hero section -->

    <!-- promotion section -->
    <div class="promotion">
        <div class="row">
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>Gaming Mouse</h3>
                        <button class="btn-flat btn-hover"><span>shop collection</span></button>
                    </div>
                    <img src="./images/images-web/mouse1.png" alt="">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>Gaming Headset</h3>
                        <button class="btn-flat btn-hover"><span>shop collection</span></button>
                    </div>
                    <img src="./images/images-web/hyperx1.png" alt="">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>Graphic Card</h3>
                        <button class="btn-flat btn-hover"><span>shop collection</span></button>
                    </div>
                    <img src="./images/images-web/gRTX2.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- end promotion section -->

    <!-- product list -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>Latest products</h2>
            </div>
            <div class="row" id="latest-products">
                <?php
                include_once '../repository/productRepository.php';
                $productRepository  = new ProductRepository();
                $products = $productRepository->getAllProducts();

                foreach ($products as $product) {
                    echo "
                    <div class='col-3 col-md-6 col-sm-12'>
                        <form action='' method='post'>
                            <div class='product-card'>
                                <div class='product-card-img'>
                                    <img src='$product[image1]' alt=''>
                                    <img src='$product[image2]' alt=''>
                                </div>
                                <div class='product-card-info'>
                                    <div class='product-btn'>
                                    <form>
                                        <a href='./product-detail.php?id=$product[id]' class='btn-flat btn-hover btn-shop-now'>shop now</a>
                                        <button type='submit' name='addCart' class='btn-flat btn-hover btn-cart-add'>
                                            <i class='bx bxs-cart-add'></i>
                                        </button>
                                        <button class='btn-flat btn-hover btn-cart-add'>
                                            <i class='bx bxs-heart'></i>
                                        </button>
                                    </div>
                                    <div class='product-card-name'>
                                        $product[name]
                                    </div>
                                    <div class='product-card-price'>
                                        <span><del>$$product[old_price]</del></span>
                                        <span class='curr-price'>$$product[current_price]</span>
                                    </div>
                                    <input type='hidden' name='product_id' value='$product[id]'>
                                </div>
                            </div>
                        </form>
                    </div>
                    ";
                }
                ?>
            </div>
            <div class="section-footer">
                <a href="./products.php" class="btn-flat btn-hover">view all</a>
            </div>
        </div>
    </div>
    <!-- end product list -->

    <!-- special product -->
    <div class="bg-second">
        <div class="section container">
            <div class="row">
                <div class="col-4 col-sm-12 col-md-4">
                    <div class="sp-item-img">
                        <img src="./images/images-web/monitor1.png" alt="">
                    </div>
                </div>
                <div class="col-8 col-sm-12 col-md-8">
                    <div class="sp-item-info">
                        <div class="sp-item-name">AOC C27G2Z 27</div>
                        <p class="sp-item-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dignissimos itaque et eaque quod harum vero autem? Reprehenderit enim non voluptate! Qui provident modi est non eius ratione, debitis iure.
                        </p>
                        <button class="btn-flat btn-hover">shop now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end special product -->

    <!-- product list -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>best selling</h2>
            </div>
            <div class="row" id="best-products">
                <?php
                include_once '../repository/productRepository.php';
                $productRepository  = new ProductRepository();
                $products = $productRepository->getAllProducts();

                foreach ($products as $product) {
                    echo "
                    <div class='col-3 col-md-6 col-sm-12'>
                        <form action='' method='post'>
                            <div class='product-card'>
                                <div class='product-card-img'>
                                    <img src='$product[image1]' alt=''>
                                    <img src='$product[image2]' alt=''>
                                </div>
                                <div class='product-card-info'>
                                    <div class='product-btn'>
                                    <form>
                                        <a href='./product-detail.php?id=$product[id]' class='btn-flat btn-hover btn-shop-now'>shop now</a>
                                        <button type='submit' name='addCart' class='btn-flat btn-hover btn-cart-add'>
                                            <i class='bx bxs-cart-add'></i>
                                        </button>
                                        <button class='btn-flat btn-hover btn-cart-add'>
                                            <i class='bx bxs-heart'></i>
                                        </button>
                                    </div>
                                    <div class='product-card-name'>
                                        $product[name]
                                    </div>
                                    <div class='product-card-price'>
                                        <span><del>$$product[old_price]</del></span>
                                        <span class='curr-price'>$$product[current_price]</span>
                                    </div>
                                    <input type='hidden' name='product_id' value='$product[id]'>
                                </div>
                            </div>
                        </form>
                    </div>
                    ";
                }
                ?>
            </div>
            <div class="section-footer">
                <a href="./products.php" class="btn-flat btn-hover">view all</a>
            </div>
        </div>
    </div>
    <!-- end product list -->

    <!-- blogs -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>latest blog</h2>
            </div>
            <div class="blog">
                <div class="blog-img">
                    <img src="./images/images-web/Glifestyle.jpg" alt="">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="blog-preview">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
                    </div>
                    <button class="btn-flat btn-hover">read more</button>
                </div>
            </div>
            <div class="blog row-revere">
                <div class="blog-img">
                    <img src="./images/images-web/Glifestyle1.jpg" alt="">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="blog-preview">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
                    </div>
                    <button class="btn-flat btn-hover">read more</button>
                </div>
            </div>
            <div class="section-footer">
                <a href="#" class="btn-flat btn-hover">view all</a>
            </div>
        </div>
    </div>
    <!-- end blogs -->

    <?php
    include 'footer.php';
    ?>

    <!-- JAVASCRIPT -->
    <script src="./js/web.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>