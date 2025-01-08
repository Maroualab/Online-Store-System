<?php 

require $_SERVER['DOCUMENT_ROOT'].'/online-store-system/config/connection.php'; // Include the database connection

class ProductManager{


    public static function selectProducts(){

        global $pdo;

        $sql="SELECT * FROM products";
        $stmt=$pdo->prepare($sql);
        $stmt->execute();


        return $stmt->fetchAll(pdo::FETCH_ASSOC);
    }
}

