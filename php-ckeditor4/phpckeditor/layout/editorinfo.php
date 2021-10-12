<h1>CKEDITOR</h1>
<?php 
  //read
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $stmt = $db->prepare('SELECT * FROM `contents` WHERE `id` = :id');
    $stmt->execute(array(':id'=> $id)); //讀取資料庫需要
    $rows = $stmt->fetchAll();
    
  }
?>
<form method='post' action=''>
  <input id="title" name="title" placeholder="標題" value="<?php echo $rows[0]['title']; ?>">
  
  </input>
  <textarea id='editor' name='textarea'>
    <?php 
        echo $rows[0]['textarea'];
    ?>
  </textarea>
  <button type="submit" name="submit">Submit</button>
  <button type="delete" name="delete">Delete</button>
  <button type="submit" name="output">Output</button>
</form>
