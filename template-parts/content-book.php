<p>書籍名: <?php the_title() ?></p>
<!-- 以下にカスタムフィールドで定義したデータを入れ込む -->
<?php
$price = get_post_meta(get_the_ID(), "価格", true);
$publisher = get_post_meta(get_the_ID(), "出版社", true);
$authors = get_post_meta(get_the_ID(), "著者", false);
?>
<dl>
  <?php if ($price) : ?>
    <dt>価格</dt>
    <dd><?php echo number_format($price); ?>円</dd>
  <?php endif ?>
  <?php if ($publisher) : ?>
    <dt>出版社</dt>
    <dd><?php echo $publisher; ?></dd>
  <?php endif ?>
  <?php if ($authors) : ?>
    <dt>著者</dt>
    <?php foreach ($authors as $author) : ?>
      <dd><?php echo $author ?></dd>
    <?php endforeach; ?>
  <?php endif ?>
</dl>