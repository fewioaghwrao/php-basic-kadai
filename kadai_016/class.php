<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>課題16</title>
</head>
<body>
   <p>
       <?php
       class Food {
           private $name;
           private $price;

           public function __construct($name, $price) {
               $this->name = $name;
               $this->price = $price;
           }

           public function show_price() {
               echo $this->price . '<br>';
           }
       }

       class Animal {
           private $name;
           private $height;
           private $weight;

           public function __construct($name, $height, $weight) {
               $this->name = $name;
               $this->height = $height;
               $this->weight = $weight;
           }

           public function show_height() {
               echo $this->height . '<br>';
           }
       }

       // インスタンス化
       $food = new Food("potato", 250);
       $animal = new Animal("dog", 60, 5000);

       print_r($food);
       print_r('<br>');
       print_r($animal);
       print_r('<br>');

       // メソッド実行
       $food->show_price();
       $animal->show_height();
       ?>
   </p>
</body>
</html>
<!DOCTYPE html>