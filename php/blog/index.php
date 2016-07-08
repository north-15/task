<?php require 'utils.php'; ?>
<?php
  $limit = 5;
  $offset = get_offset();
  $count = get_posts_count();
  $stmt = get_db()->query("select * from posts order by updated desc limit ${limit} offset ${offset}");

  // 'order by [カラム名] asc' で昇順に並び替え

  $prev_offset = $offset - $limit;
  if ($prev_offset <= 0) {
    $prev_offset = 0;
  }

  $next_offset = $offset + $limit;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cebu Blog</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <header id="header" class="">
    <h1>Cebu Blog</h1>
  </header><!-- /header -->

  <div id="contents">
    <div id="photo">
      <img src="images/cebu.jpg" alt="">
    </div>
    <div class="new">
      <a href="new.php" title="">新規記事作成</a>
    </div>
    <div class="pager">
      <?php if($offset > 0) : ?>
        <a href="?offset=<?php echo get_prev_offset($limit); ?>" title=""> ＜ </a>
      <?php endif; ?>
      <?php if ($offset + $limit < $count) : ?>
        <a href="?offset=<?php echo get_next_offset($limit); ?>" title=""> ＞ </a>
      <?php endif; ?>
    </div>

    <div id="articles">
      <p id="article-top">記事一覧</p>
      <div>
        <p>総件数: <?php echo $count; ?></p>
      </div>
      <?php foreach($stmt as $row) {?>
        <?php $id = $row['id']; ?>
        <article>
          <a href="show.php?id=<?php echo $id; ?>" title="">
            <?php echo($row['id'].'  '.$row['title']); ?>
          </a>
          <a href="edit.php?id=<?php echo $id; ?>" title="" class="edit">編集</a>
          <a href="delete.php?id=<?php echo $id; ?>" class="delete">削除</a>
        </article>
      <?php } ?>
    </div>
  </div>

  <footer>
    <?php include 'parts/footer.php'; ?>
  </footer>
  <script type="text/javascript">
    var dels = document.getElementsByClassName('delete');
    for (var i = 0; i < dels.length; i++) {
      dels[i].addEventListener('click', function(e){
        if (confirm('削除してもよろしいですか？')){
          return true;
        } else {
          e.preventDefault();
          return false;
        }
      });
    }
  </script>

</body>
</html>