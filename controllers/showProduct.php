<?php

include $_SERVER['DOCUMENT_ROOT'].'/online-store-system/repository/productManager.php';


$products= productManager::selectProducts();