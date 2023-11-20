<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編</title>
    </head>

    <body>
        <p>
            <?php
            $user_names = [
                'id' => 1,
                '名前' => '侍太郎',
                '年齢' => 30,
            ];

            foreach($user_names as $key => $value){
                echo "{$key}:{$value}<br>";
            }
            ?>
        </p>
    </body>
</html>