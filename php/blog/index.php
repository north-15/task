<?php require 'utils.php'; ?>
<?php
  $limit = 5;
  $offset = 0;
  if (isset($_GET['limit']) and !empty($_GET['limit'])) {
    $limit = $_GET['limit'];
  }
  if (isset($_GET['offset']) and !empty($_GET['offset'])) {
  $offset = $_GET['offset'];
  }

  $st_count = $db->query("select count(*) as count from posts");
  $row = $st_count->fetch();
  $count = $row['count'];

  $stmt = $db->query("select * from posts order by updated desc limit ${limit} offset ${offset}");

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

    <a href="new.php" title="">新規記事作成</a>

    <div class="pager">
      <?php if($offset > 0) : ?>
        <a href="?offset=<?php echo $prev_offset; ?>" title=""> ＜ </a>
      <?php endif; ?>
      <?php if ($offset + $limit < $count) : ?>
        <a href="?offset=<?php echo $next_offset; ?>" title=""> ＞ </a>
      <?php endif; ?>


      <p>総件数: <?php echo $count; ?></p>
    </div>

    <div id="articles">
      <p id="article-top">記事一覧</p>
      <?php foreach($stmt as $row) {?>
        <?php $id = $row['id']; ?>
        <article>
          <a href="show.php?id=<?php echo $id; ?>" title="">
            <?php echo($row['id'].''.$row['title']); ?>
          </a>
          <a href="edit.php?id=<?php echo $id; ?>" title="">編集</a>
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