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

        // クラスプロパティ
        public Static $piggyBank = 0;

        // クラスメソッド
        public static function deposit(int $yen){
            self::$piggyBank += $yen;
        }

        // コンストラクタ
        function __construct($name,$age)
        {
            // プロパティに初期値を設定する
            $this->name = $name;
            $this->age = $age;
        }

        // インスタンスメソッド
        public function hello(){
            if (is_null($this->name)){
                echo "こーんにーちはー","\n";
            }else {
                echo "こんにちはずら！{$this ->name}ずらよ！","\n";
            }
        }

        // 遅刻して罰金
        public function latePenalty(){
            // スタティックメソッドを実行
            self::deposit(1000);
        }

    }
// ?>
