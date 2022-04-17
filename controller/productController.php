<?php
include_once '../models/product.php';
include_once '../repository/productRepository.php';

if(isset($_POST['addproduct'])){
    if(empty($_POST['pName']) || empty($_POST['pPrice']) 
    || empty($_POST['pCurrentPrice']) || empty($_POST['image1']) 
    || empty($_POST['image2']) || empty($_POST['image3'])
    || empty($_POST['image4'])|| empty($_POST['image5'])
    || empty($_POST['image6'])){
        echo "<script> alert('Please fill all the fields!') </script>";
    }else{
        $name = $_POST['pName'];
        $image1 = $_POST['image1'];
        $image2 = $_POST['image2'];
        $image3 = $_POST['image3'];
        $image4 = $_POST['image4'];
        $image5 = $_POST['image5'];
        $image6 = $_POST['image6'];
        $brand = $_POST['pBrand'];
        $old_price = $_POST['pPrice'];
        $current_price = $_POST['pCurrentPrice'];
        
        $product = new Product($name,$image1,$image2,$image3,$image4,$image5,$image6,$brand,$old_price,$current_price);
        $productRepository = new ProductRepository();
        $productRepository->insertProduct($product);
    }
}

if(isset($_POST['editProduct'])){
    $id = $_POST['id'];
    $name = $_POST['pName'];
    $image1 = $_POST['image1'];
    $image2 = $_POST['image2'];
    $image3 = $_POST['image3'];
    $image4 = $_POST['image4'];
    $image5 = $_POST['image5'];
    $image6 = $_POST['image6'];
    $brand = $_POST['pBrand'];
    $oldPrice = $_POST['pPrice'];
    $currentPrice = $_POST['pCurrentPrice'];

    $productRepository = new ProductRepository();
    $productRepository->updateProduct($id, $name, $image1, $image2, $image3, $image4, $image5, $image6, $brand, $oldPrice, $currentPrice);
}
