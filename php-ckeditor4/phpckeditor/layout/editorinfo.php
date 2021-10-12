<h1>CKEDITOR</h1>
<?php 
  $stmt = $db->prepare('SELECT * FROM `contents`');
  $stmt->execute(); //讀取資料庫需要
  $rows = $stmt->fetchAll();
  $number=$_GET['id']-1;
?>
<form method='post' action=''>
  <textarea id='editor1' name='textarea'><?php echo $rows[$number]['textarea']?></textarea>
  <input type="submit" name="submit" value="Submit">
</form>
