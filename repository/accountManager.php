<?php 

require $_SERVER['DOCUMENT_ROOT'].'/online-store-system/config/connection.php'; // Include the database connection

class AccountManager{

    public static function selectData(){

            global $pdo;

            $sql = "SELECT * FROM users";
            $stmt=$pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function updateStatus($id,$status){

        global $pdo;

        $sql ="UPDATE users SET status=:status WHERE user_id=:id";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([
            "status"=>$status,
            "id"=>$id
        ]);




    }
}

