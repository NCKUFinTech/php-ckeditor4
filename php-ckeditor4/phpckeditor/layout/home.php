<h1>Home</h1>

<?php 
   foreach ($rows as $row) {echo $row['id'].'. <a href=editorinfo?id='.$row['id'].'>'.$row['title'].'</a><br \>';}
?>