<?php

include $_SERVER['DOCUMENT_ROOT'].'/online-store-system/models/Product.php';




if(isset($_POST['submit'])){
    
    $name = $_POST['product-name'];
    $price = $_POST['product-price'];
    $description = $_POST['product-description'];
    $stock = $_POST['product-stock'];
    $image = $_FILES['product-image'];
    
   
    // print_r($image);

    // foreach($_POST as $key => $value ){
    //         if(!$value || isset($_POST['key'])){
    //             $error[$key]="$key is required";
    //             $old=['name'=>$name,'price'=>$price,'description'=>$description,'stock'=>$stock,'image'=>$image];

    //             header("location:/online-store-system/views/pages/products.php");
    //             exit;
    //         }
    //     }

    
    $target = '../public/images/'.$image['name'];
    move_uploaded_file($image['tmp_name'],$target);

    $product=new Product($name,$description,$price,$stock,$image['name']);
    $product->insert();
    
        
}

