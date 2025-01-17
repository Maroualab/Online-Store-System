<?php
namespace controllers;

use \Models\User;
use PDO;

class AdminController {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

  
}
