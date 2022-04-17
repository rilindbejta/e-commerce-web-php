<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com</title>
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- css -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/web.css">
</head>

<body>

    <?php
    include 'header.php';
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