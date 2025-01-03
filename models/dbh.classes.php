<?php

class Dbh
{

    protected function connect()
    {
        try {
            $db_user = "root";
            $db_server = "localhost";
            $db_pass = "";
            $db_name = "ecommercedashboard";
            $dsn = "mysql:host=$db_server;dbname=$db_name";
            $dbh = new PDO($dsn, $db_user, $db_pass);
            return $dbh;



        } catch (PDOException $e) {
            print "Error! : " . $e->getMessage() . "<br/>";
            die();
        }





    }

}