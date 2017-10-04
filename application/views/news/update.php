<?php echo validation_errors(); ?>
<?php echo form_open('news/update/'.$news_item['id']); ?>
<label for="title">Judul</label>
<input type="text" name="title" id="title" value="<?php echo $news_item['title'] ?>"><br>

<label for="text">Text</label>
<textarea name="text" id="text" rows="8" cols="80"><?php echo $news_item['text'] ?></textarea><br>

<input type="submit" name="submit" value="Kirim">

<?php echo form_close(); ?>
