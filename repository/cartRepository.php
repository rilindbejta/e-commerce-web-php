<?php 

require_once "../database/dbConnection.php";

class CartRepository extends dbConnection {
    private $connection;
    private $query;

    public function __construct(){
        $this->connection = $this->startConnection();
    }

    public function insertToCart($user_id, $product_id, $size){
        $this->query = "insert into cart (user_id, product_id) 
            values (:user_id, :product_id)";
        $statement = $this->connection->prepare($this->query);
        $statement->bindParam(":product_id", $product_id);
        $statement->bindParam(":user_id", $user_id);

        $statement->execute();
    }


    public function getCart(){
        $this->query = "select * from cart";
        $statement = $this->connection->prepare($this->query);
        $statement->execute();
        $resut = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $resut;
    }


    public function getCartProducts($user_id){
        $this->query = "select * from cart where user_id=:user_id";
        $statement = $this->connection->prepare($this->query);
        $statement->bindParam(":user_id", $user_id);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deleteProductFromCart($product_id, $user_id){
        $this->query = "delete from cart where product_id=:product_id and user_id=:user_id";
        $statement = $this->connection->prepare($this->query);
        $statement->bindParam(":product_id", $product_id);
        $statement->bindParam(":user_id", $user_id);

        $statement->execute();
    }

    public function deleteUserCart($user_id){
        $this->query = "delete from cart where user_id=:user_id";
        $statement = $this->connection->prepare($this->query);
        $statement->bindParam(":user_id", $user_id);
        $statement->execute();
    }
}