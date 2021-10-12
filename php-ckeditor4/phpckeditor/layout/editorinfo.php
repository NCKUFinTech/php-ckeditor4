<h1>CKEDITOR</h1>
<?php 
  //read
  if(isset($_GET['id'])){
    $stmt = $db->prepare('SELECT * FROM `contents`');
    $stmt->execute(); //讀取資料庫需要
    $rows = $stmt->fetchAll();
    $number=$_GET['id']-1;
  }
?>
<form method='post' action=''>
  <input id="title" name="title" placeholder="標題" value="<?php if(isset($_GET['id'])){echo $rows[$number]['title'];}?>">
  
  </input>
  <textarea id='editor1' name='textarea'>
    <?php 
      if(isset($_GET['id'])){
        echo $rows[$number]['textarea'];
      }
    ?>
  </textarea>
  <button type="submit" name="submit">Submit</button>
  <button type="delete" name="delete">Delete</button>
</form>
