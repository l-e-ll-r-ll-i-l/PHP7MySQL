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
// ?>
