<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./css/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <nav>
            <ul id="nav-first-ul">
                <li>
                    <h1>Admin</h1>
                </li>
                <ul id="nav-inner-ul">
                    <li>
                        <a href="#"><i class='bx bxs-bell-ring'></i></a>
                        <a href="#"><i class='bx bx-chevron-down'></i></i></a>
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

        <!-- <section class="sidebar-section">
            <div class="sidebar">
                <ul>
                    <li>
                        <i class='bx bxs-dashboard'></i>
                        Dashboard
                    </li>
                    <hr>
                    <li>
                        <i class='bx bx-table'></i>
                        Tables & Panels
                    </li>
                    <hr>
                    <li>
                        <i class='bx bxs-edit'></i>
                        Forms
                    </li>
                    <hr>
                    <li>
                        <i class='bx bx-menu'></i>
                        Dropdown Menu
                    </li>
                    <hr>
                    <li>...</li>
                    <hr>
                </ul>
            </div>
        </section> -->

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
                            <tr>
                                <th colspan="7" style="height: 30px;">User Table</th>
                            </tr>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Birthday</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Admin</th>
                            </tr>
                            <tr>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td><i>null</i></td>
                            </tr>
                            <tr>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td><i>null</i></td>
                            </tr>
                            <tr>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td><i>null</i></td>
                            </tr>
                            <tr>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td><i>null</i></td>
                            </tr>
                            <tr>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td><i>null</i></td>
                            </tr>
                            <tr>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td><i>null</i></td>
                            </tr>
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
                        </ul>
                    </div>
                </div>
            </section>

            <section class="top-section">
                <!-- <div class="top-section-header">
                    <h1>Advanced Tables</h1>
                    <hr>
                </div> -->
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
                            <tr>
                                <th colspan="7" style="height: 30px;">Products Table</th>
                            </tr>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Birthday</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Admin</th>
                            </tr>
                            <tr>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td><i>null</i></td>
                            </tr>
                            <tr>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td><i>null</i></td>
                            </tr>
                            <tr>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td><i>null</i></td>
                            </tr>
                            <tr>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td><i>null</i></td>
                            </tr>
                            <tr>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td><i>null</i></td>
                            </tr>
                            <tr>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td>aaaaaa</td>
                                <td><i>null</i></td>
                            </tr>
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
                        </ul>
                    </div>
                </div>
            </section>

                </div>
            </section>
        </div>


    </div>
</body>
</html>