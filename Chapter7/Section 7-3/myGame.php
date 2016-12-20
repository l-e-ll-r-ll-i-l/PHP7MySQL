<?php
    /**
     * Created by PhpStorm.
     * User: Mu
     * Date: 2016/12/18
     * Time: 13:55
     */

    // クラスファイルを読み込む
    require_once("Soccer.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Soccerクラスを利用する</title>
</head>
<pre>

    <?php
        // Soccerクラスのインスタンスを作る
        $player1 = new Soccer("こまじろー");
        // 親クラスのメソッドを試す
        $player1->who();
        // 子クラスのメソッドを試す
        $player1 ->play();
    ?>
    <!-- マジックメソッドを試す -->
    <?php
        $player2 = new Soccer("こまさん");
        // __toStringメソッドを試す
        echo "{$player2}";
    ?>
    </pre>
<body>
</body>
</html>