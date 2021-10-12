<h1>Home</h1>

<?php 
   $stmt = $db->prepare('SELECT * FROM `contents`');
   $stmt->execute(); //讀取資料庫需要
   $rows = $stmt->fetchAll();
   foreach ($rows as $row) {echo '<a href=editorinfo?id='.$row['id'].'>'.$row['id'].'</a><br \>';}
?>
