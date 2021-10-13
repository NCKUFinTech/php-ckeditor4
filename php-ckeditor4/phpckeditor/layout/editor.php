<h1>CKEDITOR</h1>
<form method='post' action=''>
  <input id="title" name="title" placeholder="標題"></input>
  <textarea id='editor' name='textarea'></textarea>
  <button type="submit" name="submit">Submit</button>
</form>
<script>
    CKEDITOR.replace("editor",{
        resize_dir:'both',
        resize_enabled:false,
        removeButtons: 'Source,Print,Save,Paste,Form,Checkbox,Radio,Button.ImageButton,Iframe,Flash,Smiley,Export to PDF'
    });
</script>