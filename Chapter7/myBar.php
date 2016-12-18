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
    <title>クラスを読み込んで利用する</title>
</head>
<body>
<pre>
    <?php
        // staffクラスのインスタンスを作る
        $kkoma = new Staff("Kこまー",13);
        $kjiro = new Staff("Kじーろ",15);

        // メソッドを実行する
        $kkoma ->hello();
        $kjiro ->hello();

    ?>
</pre>
</body>
</html>
