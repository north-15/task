<?php require 'utils.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>新規記事作成</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <header id="header" class="">
    <h1>記事新規作成</h1>
  </header><!-- /header -->

  <div id="contents">
    <article id="submit">
      <form action="post.php" method="post" name="form" accept-charset="utf-8" enctype="multipart/form-data">
        <div class="title">
          <label for="title">タイトル
            <input type="text" name="title">
          </label>
        </div>
        <div class="content">
          <label for="contetns">内容
            <textarea name="contents" id="" cols="60" rows="40"></textarea>
          </label>
        </div>
        <div>
          <label for="image">
            画像
            <input type="file" name="image">
          </label>
        </div>
        <div class="button">
          <input type="submit" name="送信" class="submit">
        </div>
      </form>
    </article>
  </div>

  <footer>
    <?php include 'parts/footer.php' ?>
  </footer>
</body>
</html>