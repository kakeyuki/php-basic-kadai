<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編16章課題</title>
  </head>
  <body>
    <p>
      <?php
      // Foodというクラスを定義する
      class Food{
        // プロパティを定義する
        private $name;
        private $price;
        
                // メソッドを定義する
                public function show_price(){
                  echo $this->price . '<br>';
                }
                

        // コンストラクタを定義する
        public function __construct(string $name, int $price){
          $this->name = $name;
          $this->price = $price;
        }
      }

      // animalというクラスを定義する
      class Animal{
        // プロパティを定義する
        private $name;
        private $height;
        private $weight;

                // メソッドを定義する
                public function show_height(){
                  echo $this->height . '<br>';
                }


        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
      }
      // Foodというクラスをインスタンス化する
      $food = new Food('tomato', 200);

      // animalというクラスをインスタンス化する
      $animal = new Animal('cat', 45, 2000);

      // インスタンス$foodの各プロパティの値を出力する
      print_r($food);

      // 改行する
      echo '<br>';

      // インスタンス$foodの各プロパティの値を出力する
      print_r($animal);

      // 改行する
      echo '<br>';

      // Foodのメソッドへアクセスする
      $food->show_price();

      // animalのメソッドへアクセスする
      $animal->show_height();

      ?>
    </p>
  </body>
</html>