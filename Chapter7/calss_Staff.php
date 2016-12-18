<?php

    /**
     * Created by PhpStorm.
     * User: Mu
     * Date: 2016/12/18
     * Time: 12:13
     */
    class Staff
    {
        // インスタンスプロパティ
        public $name;
        public $age;

        // インスタンスメソッド
        public function hello(){
            if (is_null($this->name)){
                echo "こーんにーちはー","\n";
            }else {
                echo "こんにちはずら！{$this ->name}ずらよ！","\n";
            }
        }

        // コンストラクタ
        function __construct($name,$age)
        {
            // プロパティに初期値を設定する
            $this->name = $name;
            $this->age = $age;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>クラスを定義する</title>
</head>
<body>
<pre>
    <?php
        // staffクラスのインスタンスを作る
       /*
        $koma = new Staff();
        $komajiro = new Staff();
       */
        $kkoma = new Staff("Kこまー",13);
        $kjiro = new Staff("Kじーろ",15);

        // プロパティの値を設定する
        /*
        $koma ->name = "こまさん";
        $koma ->age = 21;

        $komajiro ->name ="こまじろー";
        $koma ->age = 35;
        */

        // インスタンスを確認する
        print_r($kkoma);
        print_r($kjiro);

        // メソッドを実行する
        /*
        $koma ->hello();
        $komajiro ->hello();
        */

        $kkoma ->hello();
        $kjiro ->hello();

    ?>
</pre>
</body>
</html>