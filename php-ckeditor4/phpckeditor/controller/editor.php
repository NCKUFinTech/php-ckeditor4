<?php

   //存資料
   if(isset($_POST['submit'])){
      $textarea = $_POST['textarea'];
      if($textarea != ''){
         $stmt = $db->prepare('INSERT INTO contents (textarea) VALUES (:textarea)');
         $stmt->execute(array(
            ':textarea' => $textarea
         ));

         echo "success !";
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