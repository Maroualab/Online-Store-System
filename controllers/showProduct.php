<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/online-store-system/repository/productManager.php';


$products= productManager::selectProducts();