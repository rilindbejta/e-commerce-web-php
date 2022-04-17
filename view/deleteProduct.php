<?php
include_once '../repository/productRepository.php';

$productRepository  = new ProductRepository();
$id = $_GET['id'];
$productRepository->deleteProductById($id);

header('Location: adminDashboard.php');
?>