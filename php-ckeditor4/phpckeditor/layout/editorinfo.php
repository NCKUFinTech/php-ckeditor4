<h1>CKEDITOR</h1>

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
<script>
    CKEDITOR.replace("editor",{
        resize_dir:'both',
        resize_enabled:false,
        removeButtons: 'Source,Print,Save,Paste,Form,Checkbox,Radio,Button.ImageButton,Iframe,Flash,Smiley,Export to PDF'
    });
</script>