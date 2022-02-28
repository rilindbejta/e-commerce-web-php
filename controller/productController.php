<?php
include_once '../repository/productRepository.php';
include_once '../models/product.php';

if(isset($_POST['add'])){
    if(empty($_POST['name']) || empty($_POST['image1']) || empty($_POST['image2']) || empty($_POST['image3']) ||
        empty($_POST['image4']) || empty($_POST['image5']) || empty($_POST['image6']) || empty($_POST['brand']) || 
        empty($_POST['old_price']) || empty($_POST['current_price'])){
            echo "Fill all fields!";
    }
    else {
        $name = $_POST["name"];
        $image1 = $_POST["image1"];
        $image2 = $_POST["image2"];
        $image3 = $_POST["image3"];
        $image4 = $_POST["image4"];
        $image5 = $_POST["image5"];
        $image6 = $_POST["image6"];
        $brand = $_POST["brand"];
        $old_price = $_POST["old_price"];
        $current_price = $_POST["current_price"];

        $product = new Product($name,$image1,$image2,$image3,$image4,$image5,$image6,$brand,$old_price,$current_price);
        $productRep = new ProductRepository();
        $productRep->insertProduct($product);
    }
}

?>