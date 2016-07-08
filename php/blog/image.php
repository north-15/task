<?php
  require 'utils.php';
  $id = $_GET['id'];
  $post = get_post($id);
  if (empty($post['file_type'])){
    $file_type = "image/jpeg";
  } else {
    $file_type = $post['file_type'];
  }
  $content_type = "Content-Type: ${file_type}";
  header($content_type);
  readfile($post['image_path']);
?>