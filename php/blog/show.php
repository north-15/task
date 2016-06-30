<?php require 'utils.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ブログ</title>
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
    <article id="show">
      <?php
        if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $stmt = $db->query("select * from posts where id = ${id}");

        if ($stmt->rowCount() == 0) {
          echo "指定された記事がありません";
        } else {
          foreach ($stmt as $row) {
          $post = $row;
          }
        }
      } else {
        echo "IDが指定されていません";
      }
      ?>
      <?php if (isset($post)) { ?>
      <h2><?php echo $post['title']; ?></h2>
      <p class="date"><?php echo $post['created'] ?></p>
      <p class="date"><?php echo $post['updated'] ?></p>
      <p><?php echo $post['contents'] ?></p>
      <?php } ?>
    </article>

  </div>

  <footer>
    <?php include 'parts/footer.php'; ?>
  </footer>
</body>
</html>