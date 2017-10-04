<?php echo validation_errors(); ?>
<?php echo form_open('news/create'); ?>
<label for="title">Judul</label>
<input type="text" name="title" id="title" value=""><br>

<label for="text">Text</label>
<textarea name="text" id="text" rows="8" cols="80"></textarea><br>

<input type="submit" name="submit" value="Kirim">

<?php echo form_close(); ?>
