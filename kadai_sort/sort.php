<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編_ソート関数</title>
  </head>
  <body>
    <p>
      <?php
      function sort_2way($array, $order){
        if($order === true){
          echo '昇順にソートします。<br>';
          sort($array);
          foreach ($array as $key => $value){
            echo "{$value}<br>";
          }
        }else{
          echo '降順にソートします。<br>';
          rsort($array);
          foreach($array as $key => $value){
            echo "{$value}<br>";
          }
        }
      }

      // ソートする配列を宣言
      $nums = [15, 4, 18, 23, 10];

      // ソート関数を呼び出す
      sort_2way($nums, true);

      sort_2way($nums, false);
      ?>
    </p>
  </body>
</html>