<?php
   $stmt = $db->prepare('SELECT * FROM `contents`');
   $stmt->execute(); //讀取資料庫需要
   $rows = $stmt->fetchAll();

   $Title="home";
   include('layout/header.php'); // 載入共用的頁首
   include('layout/home.php');     // 載入登入用的頁面
   include('layout/footer.php'); // 載入共用的頁尾
?>