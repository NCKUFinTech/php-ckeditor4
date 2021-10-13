<?php

   //read
   if(isset($_GET['id'])){
   $id=$_GET['id'];
   $stmt = $db->prepare('SELECT * FROM `contents` WHERE `id` = :id');
   $stmt->execute(array(':id'=> $id)); //讀取資料庫需要
   $rows = $stmt->fetchAll();
   }
   
   //delete
   if(isset($_POST['delete'])){
      $id=$_GET['id'];
      $stmt = $db->prepare('DELETE FROM contents WHERE id=:id');
      $stmt->execute(array(':id' => $id));
      header("Location:home");
   }

   //update
   if(isset($_POST['submit'])){
      $id=$_GET['id'];
      $title=$_POST['title'];
      $textarea=$_POST['textarea'];
      $stmt = $db->prepare('UPDATE contents SET `title` = :title, `textarea` = :textarea WHERE `id` = :id');
      $stmt->execute(array(
         ':id'=>$id,
         ':title' => $title,
         ':textarea' => $textarea
      ));
      header("Location:editorinfo?id=".$id);
   }

   if(isset($_POST['output'])){
      include("controller/output.php");
   }

   $Title="editor";
   include('layout/header.php'); // 載入共用的頁首
   include('layout/editorinfo.php');     // 載入登入用的頁面
   include('layout/footer.php'); // 載入共用的頁尾
?>