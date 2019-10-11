<?php
	session_start();
    require_once __DIR__. "/../libraries/Database.php";
    require_once __DIR__. "/../libraries/Function.php";

    $db = new Database;
   
   define("ROOT", $_SERVER['DOCUMENT_ROOT'] ."/PHP_Thuan/public/uploads/");


   $category = $db->fetchAll("category");
   $labels = $db->fetchAll("labels");


   // lấy danh sách sản phẩm mới
   $sqlNew = "SELECT * FROM product WHERE 1 ORDER BY id DESC LIMIT 3";
   $productNew = $db->fetchsql($sqlNew);
?>
