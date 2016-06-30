<?php
  $db = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
  // 属性を設定。エラー時に例外を投げる
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $insert_sql = "insert into posts (title, contents, created, updated)
    values (?, ?, current_timestamp, current_timestamp)";

  $stmt = $db->prepare($insert_sql);
  $success = $stmt->execute(array("PHPからタイトル", "PHPからメッセージ"));

  $select_sql = "select * from posts";
  $stmt = $db->query($select_sql);
  echo "<pre>";
  foreach ($stmt as $row) {
    print_r($row);
  }
  echo "</pre>";



 ?>