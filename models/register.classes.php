<?php

class Register extends Dbh
{

    protected function setUser($name, $email, $pwd)
    {
        $stmt = $this->connect()->prepare('INSERT INTO users (username,email, password) VALUES (?,?,?);');
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($name, $pwd, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

      $stmt=null;

    }
    protected function checkUser($name, $email)
    {
        $stmt = $this->connect()->prepare('SELECT username FROM users where username = ? OR email = ?');


        if (!$stmt->execute(array($name, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;

    }
}

