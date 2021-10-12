<?php

   //create
   if(isset($_POST['submit'])){
      $textarea = $_POST['textarea'];
      $title = $_POST['title'];
      if($textarea != ''){
         $stmt = $db->prepare('INSERT INTO contents (title,textarea) VALUES (:title,:textarea)');
         $stmt->execute(array(
            ':textarea' => $textarea,
            ':title'=> $title
         ));

         header('Location: editor');
      }else{
         echo "error !";
      }
   }

   $Title="editor";
   include('layout/header.php'); // 載入共用的頁首
   include('layout/editor.php');     // 載入登入用的頁面
   include('layout/footer.php'); // 載入共用的頁尾
?>