<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/online-store-system/models/Product.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/online-store-system/repository/productManager.php';


if(isset($_POST['submit'])){
    
    $name = $_POST['product-name'];
    $price = $_POST['product-price'];
    $description = $_POST['product-description'];
    $stock = $_POST['product-stock'];
    $image = $_FILES['product-image'];
    
    
    
    $target = '../../public/images/'.$image['name'];
    move_uploaded_file($image['tmp_name'],$target);
    
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        
        ProductManager::updateProduct($name,$description,$price,$stock,$image['name'],$id);
        header("location:/online-store-system/views/pages/products.php");
    }else{
        $product=new Product($name,$description,$price,$stock,$image['name']);
        $product->insert();
        header("location:/online-store-system/views/pages/products.php");
    }
            
}


// print_r($image);

// foreach($_POST as $key => $value ){
//         if(!$value || isset($_POST['key'])){
//             $error[$key]="$key is required";
//             $old=['name'=>$name,'price'=>$price,'description'=>$description,'stock'=>$stock,'image'=>$image];

//             header("location:/online-store-system/views/pages/products.php");
//             exit;
//         }
//     }

if(isset($_GET['deletedId'])){
    $id=$_GET['deletedId'];
    
    ProductManager::softDeleteProduct($id);
    header("location:/online-store-system/views/pages/products.php");}