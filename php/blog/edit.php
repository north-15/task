<?php require 'utils.php' ?>
<?php
  if (is_empty($_GET, 'id')){
    $error = "IDを指定してください";
    $page_title = "エラーです！！！";
  } else {
    $id = $_GET['id'];
    $post = get_post($id);
    $page_title = "編集";
  }

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title><?php echo $page_title; ?></title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <header id="header" class="">
    <h1><?php echo $page_title; ?></h1>
  </header><!-- /header -->

  <div id="contents">
    <article id="submit">
      <?php if (isset($error)) : ?>
        <p><?php echo $error; ?></p>
      <?php elseif(!isset($post)): ?>
        <p>指定した記事が存在しません</p>
      <?php else : ?>
        <form action="post.php" method="post" name="form" accept-charset="utf-8" enctype="multipart/form-data">
          <div class="title">
            <label for="title">タイトル
              <input type="text" name="title" value="<?php echo $post['title']; ?>">
            </label>
          </div>
          <div class="content">
            <label for="contetns">内容
              <textarea name="contents" id="" cols="50" rows="10"><?php echo $post['contents']; ?></textarea>
            </label>
          </div>
          <div>
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="image">
              <img src="image.php?id=<?php echo $id; ?>" alt="">
            </div>
            <div>
              <label for="image">
                画像
                <input type="file" name="image">
              </label>
            </div>
            <input type="submit" name="送信">
          </div>
        </form>
      <?php endif; ?>
    </article>
  </div>

  <footer>
    <?php include 'parts/footer.php' ?>
  </footer>
</body>
</html>