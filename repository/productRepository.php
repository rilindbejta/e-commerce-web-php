<?php 
    include '../models/product.php';
    include '../database/dbConnection.php';

    class ProductRepository{
        private $connection;

        function __construct()
        {
            $conn = new DBConnection;
            $this->connection = $conn->startConnection();
        }
    
        function insertProduct($product){
            $conn = $this->connection;

            $id = $product->getId();
            $name = $product->getName();
            $image1 = $product->getImage1();
            $image2 = $product->getImage2();
            $image3 = $product->getImage3();
            $image4 = $product->getImage4();
            $image5 = $product->getImage5();
            $image6 = $product->getImage6();
            $brand = $product->getBrand();
            $old_price = $product->getOldPrice();
            $current_price = $product->getCurrentPrice();

            $sql = "INSERT INTO products(name,image1,image2,image3,image4,image5,image6,brand,old_price,current_price) 
                VALUES(?,?,?,?,?,?,?,?,?,?)";
            $statement = $conn->prepare($sql);
            $statement->execute([$name,$image1,$image2,$image3,$image4,$image5,$image6,$brand,$old_price,$current_price]);
        }

        function getAllProducts(){
            $conn = $this->connection;

            $sql = "SELECT * FROM products";
            $statement = $conn->query($sql);
            $products = $statement->fetchAll();

            return $products;
        }


    }

?>