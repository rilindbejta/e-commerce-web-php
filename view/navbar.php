<?php
session_start();
require_once '../assets/authentication.php';
?>
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
                        <a href='../view/userProfile.php'><i class='bx bx-user-circle'></i></a>
                    </li>
                    <li>
                        <!-- Logout -->
                        <a href="../assets/logout.inc.php">Logout</a>
                        <a href="../assets/logout.inc.php"><i class='bx bx-log-in'></i></a></a>
                    </li>
                </ul>
            </ul>
        </nav>
    </header>
