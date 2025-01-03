<?php
    namespace models;

use PDO;

class User{


    private $pdo;
    protected $userID;
    protected $name;
    protected $email;
    protected $password;
    
    public function __construct($name,$email,$password,PDO $pdo){
        
        $this->name =$name;
        $this->email =$email;
        $this->password =$password;
        $this->pdo = $pdo;

    }

    public function getName(){
        return $this->name;
    }

    
    public function register($username, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->pdo->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
        $stmt->execute(['username' => $username, 'email' => $email, 'password' => $hashedPassword]);
    }

    public function login($email, $password) {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }

    public function updateProfile($id, $username, $email) {
        $stmt = $this->pdo->prepare('UPDATE users SET username = :username, email = :email WHERE id = :id');
        $stmt->execute(['username' => $username, 'email' => $email, 'id' => $id]);
    }
}
