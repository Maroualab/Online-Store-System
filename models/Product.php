<?php

include $_SERVER['DOCUMENT_ROOT'].'/online-store-system/config/connection.php';

class Product
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $stock;
    private $image;
    

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->stock;
    }

    public function setName($name)
    {
        if(!$name){
            echo "Name is required";
            return;
        }
        $this->name = $name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setQuantity($stock)
    {
        $this->stock = $stock;
    }
    public function __construct($name, $description, $price, $stock,$image)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
        $this->image = $image;
    }

    public function __destruct()
    {
        echo "Product object is destroyed\n";
    }

    public function rendreRow()
    {
        return "<tr>
                    <td>$this->name</td>
                    <td>$this->description</td>
                    <td>$this->price</td>
                    <td>$this->stock</td>
                    <td>
                        <a href='/products/edit.php?id=$this->id'>Edit</a>
                        <a href='/products/delete.php?id=$this->id'>Delete</a>
                    </td>
                </tr>";
    }

    public function insert(){

        global $pdo;

        $sql ="INSERT INTO products (name,description,price,stock,image_url) VALUES(:name , :description ,:price,:stock,:image)";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([
            "name" => $this->name,
            "description" => $this->description,
            "price" => $this->price,
            "stock" => $this->stock,
            "image" => $this->image
        ]);



    }
}
