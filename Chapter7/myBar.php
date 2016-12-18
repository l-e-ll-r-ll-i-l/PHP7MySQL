<?php
    /**
     * Created by PhpStorm.
     * User: Mu
     * Date: 2016/12/18
     * Time: 13:06
     */

    // Staffクラスファイルを読み込む
    require_once ("Staff.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>クラスメンバーを使う</title>
</head>
<body>
<pre>
    <?php
        // クラスメソッドを実行する
        Staff::deposit(100);
        Staff::deposit(150);

        // クラスプロパティを確認する
        echo Staff::$piggyBank,"円になりました。\n";

        // staffクラスのインスタンスを作る
        $kkoma = new Staff("Kこまー",13);
        // インスタンスメソッドを実行する
        $kkoma->latePenalty();

        // クラスプロパティを確認する

        //$kjiro = new Staff("Kじーろ",15);
        echo Staff::$piggyBank,"円になりました。\n";


        // メソッドを実行する
        /*
            $kkoma ->hello();
            $kjiro ->hello();
         */
    ?>
</pre>
</body>
</html>
