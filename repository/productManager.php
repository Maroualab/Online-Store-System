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

    public static function selectProduct($id){

        global $pdo;

        $sql="SELECT * FROM products WHERE product_id=:id";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([
            "id"=>$id
        ]);

        return $stmt->fetch(pdo::FETCH_ASSOC);
     
    }

    public static function updateProduct($name,$description,$price,$stock,$image,$id){

        global $pdo;

       
        $sql="UPDATE products SET name=:name , description=:description, price=:price , stock=:stock , image_url=:image_url WHERE product_id=:id ;";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([
            "name"=>$name,
            "description"=>$description,
            "price"=>$price,
            "stock"=>$stock,
            "image_url"=>$image,
            "id"=>$id
        ]);



    }
}

