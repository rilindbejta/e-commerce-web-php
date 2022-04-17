<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/grid.css">
</head>
<body>

    <?php
        include 'navbar.php';
    ?>

    <div class="container">

    <?php
        include 'sidebar.php';
    ?>
        <div class="content">
            <div class="content-header">
                <div class="div-h1">
                    <span>Tables Page</span>
                </div>
            </div>
            <hr>
            <section class="top-section">
                <div class="top-section-header">
                    <h1>Advanced Tables</h1>
                    <hr>
                </div>
                <div class="top-section-content">
                    <ul>
                        <li>
                            <select name="dropmenu" id="">
                                <option value="option">10</option>
                                <option value="option">25</option>
                            </select>
                            <span>records per page</span>
                        </li>
                        <li><input type="text" placeholder="Search"></li>
                    </ul>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="6" style="height: 30px;">Users Table</th>
                                </tr>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Admin</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                include_once '../repository/userRepository.php';
                                $userRepository  = new UserRepository();
                                $users = $userRepository->getAllUsers();
                                foreach($users as $user){
                                echo 
                                "
                                <tr>
                                    <td>$user[id]</td>
                                    <td>$user[name]</td>
                                    <td>$user[username]</td>
                                    <td>$user[email]</td>
                                    <td>$user[admin]</td>
                                    <td class='last-col'>
                                        <a href='editUser.php?id=$user[id]'>
                                            <i class='bx bx-edit btn-edit'></i>
                                        </a>
                                        <a href='deleteUser.php?id=$user[id]'>
                                            <i class='bx bx-trash btn-delete'></i>
                                        </a>
                                    </td>
                                </tr>
                                ";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="top-section-footer">
                    <div class="top-section-footer-container">
                        <ul>
                            <li>
                                Showing 1 to 25 of 57 entries
                            </li>
                            <li>
                                <button>Previous</button>
                                <button>1</button>
                                <button>2</button>
                                <button>3</button>
                                <button>Next</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="top-section">
                <hr>
                <div class="top-section-content">
                    <ul>
                        <li>
                            <select name="dropmenu" id="">
                                <option value="number">10</option>
                                <option value="number">25</option>
                            </select>
                            <span>records per page</span>
                        </li>
                        <li><input type="text" placeholder="Search"></li>
                    </ul>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="9" style="height: 30px;">Products Table</th>
                                </tr>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Current Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                include_once '../repository/productRepository.php';
                                $productRepository  = new ProductRepository();
                                $products = $productRepository->getAllProducts();

                                foreach($products as $product){
                                echo 
                                "
                                <tr>
                                    <td>$product[id]</td>
                                    <td>$product[name]</td>
                                    <td>$product[brand]</td>
                                    <td>$product[old_price]</td>
                                    <td>$product[current_price]</td>
                                    <td class='last-col'>
                                        <a href='editProduct.php?id=$product[id]'>
                                            <i class='bx bx-edit btn-edit'></i>
                                        </a>
                                        <a href='deleteProduct.php?id=$product[id]'>
                                            <i class='bx bx-trash btn-delete'></i>
                                        </a>
                                    </td>
                                </tr>
                                ";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="top-section-footer">
                    <div class="top-section-footer-container">
                        <ul>
                            <li>
                                Showing 1 to 25 of 57 entries
                            </li>
                            <li>
                                <button>Previous</button>
                                <button>1</button>
                                <button>2</button>
                                <button>3</button>
                                <button>Next</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

                </div>
            </section>
        </div>


    </div>

    <script src="js/dashboard.js"></script>
</body>
</html>