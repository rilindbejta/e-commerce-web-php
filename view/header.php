<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- app css -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/web.css">
</head>

<?php
session_start();
?>

   <!-- header -->
    <header>
        <!-- mobile menu -->
        <div class="mobile-menu bg-second">
            <a href="../view/index.php" class="mb-logo">e-com</a>
            <span class="mb-menu-toggle" id="mb-menu-toggle">
                <i class='bx bx-menu'></i>
            </span>
        </div>
        <!-- end mobile menu -->

        <!-- main header -->
        <div class="header-wrapper" id="header-wrapper">
            <span class="mb-menu-toggle mb-menu-close" id="mb-menu-close">
                <i class='bx bx-x'></i>
            </span>
            <!-- mid header -->
            <div class="bg-main">
                <div class="mid-header container">
                    <a href="../view/index.php" class="logo">E-com</a>
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <i class='bx bx-search-alt'></i>
                    </div>
                    <ul class="user-menu">
                        <?php
                            if(isset($_SESSION["userId"])){
                                // echo "<li><a href='#'><i class='bx bx-bell'></i></a></li>";
                                echo "<li><a href='../view/userProfile.php' title='Profile'><i class='bx bx-user-circle'></i></a></li>";
                                echo "<li><a href='../view/cart.php' title='Cart'><i class='bx bx-cart'></i></a></li>";
                                if(isset($_SESSION["role"]) == 1){
                                    echo "<li><a href='../view/adminDashboard.php' title='Dashboard'><i class='bx bxs-dashboard'></i></a></li>";
                                }
                                echo "<li><a href='../assets/logout.inc.php' title='Logout'><i class='bx bx-log-in'></i></a></li>";
                            }
                            else{
                                echo "<li><a id='loginIcon' href='../view/login.php'>Login<i class='bx bx-lock'></i></a></li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <!-- end mid header -->
            <!-- bottom header -->
            <div class="bg-second">
                <div class="bottom-header container">
                    <ul class="main-menu">
                        <li><a href="./index.php">home</a></li>
                        <!-- mega menu -->
                        <li class="mega-dropdown">
                            <a href="./products.php">Shop<i class='bx bxs-chevron-down'></i></a>
                            <div class="mega-content">
                                <div class="row">
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>Categories</h3>
                                            <ul>
                                                <li><a href="#">Wireless</a></li>
                                                <li><a href="#">Inear headphone</a></li>
                                                <li><a href="#">Overear headphone</a></li>
                                                <li><a href="#">sport headphone</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>Categories</h3>
                                            <ul>
                                                <li><a href="#">Wireless</a></li>
                                                <li><a href="#">Inear headphone</a></li>
                                                <li><a href="#">Overear headphone</a></li>
                                                <li><a href="#">sport headphone</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>Categories</h3>
                                            <ul>
                                                <li><a href="#">Wireless</a></li>
                                                <li><a href="#">Inear headphone</a></li>
                                                <li><a href="#">Overear headphone</a></li>
                                                <li><a href="#">sport headphone</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>Categories</h3>
                                            <ul>
                                                <li><a href="#">Wireless</a></li>
                                                <li><a href="#">Inear headphone</a></li>
                                                <li><a href="#">Overear headphone</a></li>
                                                <li><a href="#">sport headphone</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row img-row">
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="./images/images-web/desktop1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="./images/images-web/gRTX2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="./images/images-web/keyboard1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="./images/images-web/monitor1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end mega menu -->
                        <li><a href="#">blog</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- end bottom header -->
        </div>
        <!-- end main header -->
    </header>
    <!-- end header -->