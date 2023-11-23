<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編</title>
    </head>
    
    <body>
        <p>
            <?php
            // クラス作成
            class Food {
                // プロパティを定義する
                private $name;
                private $price;

                // コンストラクタを定義する
                public function __construct(string $name, int $price){
                    $this->name = $name;
                    $this->price = $price;
                }
                public function show_price(){
                    echo $this->price;
                }
            }

            // メイン処理
            // インスタンス化する
            $Food = new Food('potato', 250);

            // インスタンス$Foodの各プロパティの値を出力する
            print_r($Food);
            ?>
        </p>
        <p>
            <?php
            // クラス作成
            class Animal {
                // プロパティを定義する
                private $name;
                private $height;
                private $weight;

                // コンストラクタを定義する
                public function __construct(string $name, int $height, string $weight){
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }
                public function show_height(){
                    echo $this->height;
                }
            }

            // メイン処理
            // インスタンス化する
            $Animal = new Animal('dog', 60, 5000);

            //　インスタンス$Foodの各プロパティの値を出力する
            print_r($Animal);
            ?>
            </p>
            <p>
                <?php
                // メソッドにアクセスして実行する
                $Food->show_price();
                ?>
            </p>
            <p>
                <?php
                // メソッドにアクセスして実行する
                $Animal->show_height();
                ?>
            </p>
    </body>
</html>