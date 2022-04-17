<?php
ob_start();
include_once '../repository/userRepository.php';

$userRepository  = new UserRepository();
$userId = $_GET['id'];
$user = $userRepository->getUserById($userId);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/addProducts.css">
    <link rel="stylesheet" href="css/editUser.css">
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
                        <!-- Logout -->
                        <a href="#">Logout</a>
                        <a href="#"><i class='bx bx-log-in'></i></a></a>
                    </li>
                </ul>
            </ul>
        </nav>
    </header>
    <div class="container">
    <?php include 'sidebar.php'; ?>
    <div class="content">
        <div id="header-container">
            <h1>Edit User</h1>
        </div>
        <div class="" id="form-wrapper">
            <div id="forms-container">
                <form id="btn-container-form" action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <div class="col-4">
                        <div class="form-control">
                            <span>ID*</span>
                            <input type="text" name="id" id="id" value="<?=$user['id']?>" readonly>
                        </div>
                        <div class="form-control">
                            <span>Full name*</span>
                            <input type="text" name="name" id="nameUser" value="<?=$user['name']?>">
                        </div>
                        <div class="form-control">
                            <span>Username*</span>
                            <input type="text" name="username" id="username" value="<?=$user['username']?>">
                        </div>
                        <div class="form-control">
                            <span>Birthday*</span>
                            <input type="text" name="birthday" id="birthday" value="<?=$user['birthday']?>">
                        </div>
                        <div class="form-control">
                            <span>Email*</span>
                            <input type="email" name="email" id="email" value="<?=$user['email']?>">
                        </div>
                        <div class="form-control">
                            <span>Password*</span>
                            <input type="password" name="password" id="password" value="<?=$user['password']?>" disabled>
                        </div>
                        <div class="form-control">
                            <span>Admin*</span>
                            <input type="number" name="admin" id="admin" value="<?=$user['admin']?>">
                        </div>
                        <div class="form-control" id="btn-div">
                            <input type="submit" name="update" id="btn-submit" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="js/dashboard.js"></script>
</body>
</html>
<?php
if(isset($_POST['update'])){
    $id = $userId;
    $name = $_POST['name'];
    $username = $_POST['username'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $admin = $_POST['admin'];

    $userRepository->updateUser($id, $name, $username, $birthday, $email, $password, $admin);
    header('Location: adminDashboard.php');
}
?>