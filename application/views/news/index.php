<?php foreach ($news as $value): ?>
  <h1><a href="<?php echo site_url('news/'.$value['slug']); ?>"><?php echo $value['title']; ?></a></h1>
  <p><?php echo $value['text']; ?></p>
<?php endforeach; ?>
