<?php

    /**
     * Created by PhpStorm.
     * User: Mu
     * Date: 2016/12/18
     * Time: 13:37
     */
    class Player
    {
        // インスタンスプロパティ
        public $name;

        // コンストラクタ
        function  __construct($name='名無し')
        {
            // プロパティに初期値を設定する
            $this->name=$name;
        }

        // ストリングにキャストされたとき返す文字
        public function __toString()
        {
            // TODO: Implement __toString() method.
            return $this->name."ぱりぴー";
        }

        // インスタンスメソッド
        public function who(){
            echo "{$this->name}ずらよ","\n";
        }

    }