<?php
require_once '../database/dbConnection.php';

class ProductRepository {
    private $connection;

    function __construct(){
        $conn = new dbConnection();
        $this->connection = $conn->startConnection();
    }

    function insertProduct($product){
        $conn = $this->connection;

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

        $sql = "INSERT INTO products (name,image1,image2,image3,image4,image5,image6,brand,old_price,current_price) VALUES (?,?,?,?,?,?,?,?,?,?)";
        
        $statement = $conn->prepare($sql);
        $statement->execute([$name,$image1,$image2,$image3,$image4,$image5,$image6,$brand,$old_price,$current_price]);
        // echo "<script>alert('Product added successfully')</script>";
        header("Location: ../view/adminDashboard.php");
    }

    function getAllProducts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM products";
        $statement = $conn->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }

    function getProductsById($id){
      $conn = $this->connection;

      $sql = "SELECT * FROM products WHERE id='$id'";
      $statement=$conn->query($sql);
      $product = $statement->fetch();

      return $product;
    }


    function updateProduct($id,$name,$image1,$image2,$image3,$image4,$image5,$image6,$brand,$old_price,$current_price){
        $conn = $this->connection;

        $sql = "UPDATE products SET name=?,image1=?,image2=?,image3=?,image4=?,image5=?,image6=?,brand=?,old_price=?,current_price=? where id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name,$image1,$image2,$image3,$image4,$image5,$image6,$brand,$old_price,$current_price, $id]);
        // echo "<script> alert('Product has been updated successfuly!') </script>";
        header("Location: ../view/adminDashboard.php");
    }

    function deleteProductById($id){
        $conn = $this->connection;

        $sql = "DELETE FROM products WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        // echo "<script> alert('Product has been deleted successfuly!') </script>";

        header("Location: ../view/adminDashboard.php");
    }

    public function getProductsByLimit($number){
        $this->query = "select * from products limit $number";
        $statement = $this->connection->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}

