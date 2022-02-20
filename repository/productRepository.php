<?php
    include 'C:\xampp\htdocs\PROJEKTI\database\dbConnection.php';

    class ProductRepository{
        private $connection;

        function __construct()
        {
            $conn = new DBConnection;
            $this->connection = $conn->startConnection();
        }
    
        function insertProduct(){
            $conn = $this->connection;
            $sql = "INSERT INTO produktet VALUES(?,?,?,?,?,?,?,?,?,?)";
            $statement = $conn->prepare($sql);
            $statement->execute(['monitor','image1','image2','image3','image4','image5','image6','brand',1,2]);
            echo "Success!";
        }
    }

    $prodRep = new ProductRepository();
    $prodRep->insertProduct();
?>