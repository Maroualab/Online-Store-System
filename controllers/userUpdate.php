<?php

include $_SERVER['DOCUMENT_ROOT'].'/online-store-system/repository/accountManager.php';

if(isset($_GET['id'])&&isset($_GET['status'])){
    $id=$_GET['id'];
    $status=$_GET['status'];

    if($status== 'active'){
        $status = 'disabled';
    }else{
        $status = 'active';
    }
    
AccountManager::updateStatus($id,$status);

header("location:/online-store-system/views/pages/dashboard.php");
}