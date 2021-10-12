<?php
   //delete
   if(isset($_POST['delete'])){
      $id=$_GET['id'];
      $stmt = $db->prepare('DELETE FROM contents WHERE id=:id');
      $stmt->execute(array(':id' => $id));
      header("Location:editor");
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
      $id=$_GET['id'];
      $stmt = $db->prepare('SELECT * FROM contents WHERE id=:id');
      $stmt->execute(array(':id' => $id));
      $rows = $stmt->fetchAll();

      //這個部分參考https://www.sourcecodester.com/tutorials/php/12412/php-export-html-text-ms-word.html
      if(!empty($rows[0]['title']) && !empty($rows[0]['textarea'])){	
         $output ="
            <h1>".$rows[0]['title']."</h1><br \>
            <div>".$rows[0]['textarea']."</div>
         ";
 
         $date = date("Y-m-d");
 
         header("Content-Type: application/vnd.msword");
         header("Expires: 0");//no-cache
         header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
         header("content-disposition: attachment;filename=".$date.".doc");
 
         echo "<html>";
         echo $output;
         echo "</html>";
 
      }else{
         echo "<script>alert('Please complete the required field!')</script>";
         echo "<script>window.location='index.php'</script>";
      }
      //
   }

   $Title="editor";
   include('layout/header.php'); // 載入共用的頁首
   include('layout/editorinfo.php');     // 載入登入用的頁面
   include('layout/footer.php'); // 載入共用的頁尾
?>