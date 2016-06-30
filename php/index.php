<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <p>
    ようこそ<?php echo $_REQUEST['name']; ?>さん！
    あなたは<?php echo $_REQUEST['age'] ?>歳ですね
    <?php
      $total = $_REQUEST['age'] + $_REQUEST['plus'];
      echo $total;
    ?>
    あなたの体重は<?php echo $_REQUEST['weight'] ?>kgぐらいですか？

    <?php
      $var = <<<EOT
あああああ
いいいいいい
ううううう
EOT;
 echo $var;
     ?>

    <hr>

    <!-- 配列 -->
    <?php
      $array = array('apple', 'banana', 'orange');
      ?>
    <pre>
    あいうえお
    かきくけこ
      <?php print_r($array);
        echo $array[0];
       ?>
    </pre>

    <!-- 連想配列 -->
    <pre>
    <?php
      $array = array('red' => 'apple', 'yellow' => 'banana', 'orange' => 'orange');
      print_r($array);
     ?>
    </pre>

    <!-- 多次元配列 -->
    <pre>
    <?php
      $array = array(
        'red' => array('apple', 'cherry'),
        'yellow' => array('banana', 'mango'),
        'orange' => 'orange');
      print_r($array);
      echo $array['yellow'][1];
      ?>
    </pre>

  </p>
</body>
</html>