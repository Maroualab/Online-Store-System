<?php

include $_SERVER['DOCUMENT_ROOT'].'/online-store-system/repository/accountManager.php';

// echo json_encode(AccountManager::selectData());
$users = AccountManager::selectData(); 

