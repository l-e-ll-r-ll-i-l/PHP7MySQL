<?php

    /**
     * Created by PhpStorm.
     * User: Mu
     * Date: 2016/12/18
     * Time: 13:51
     */

    //Playerクラス定義ファイルを読み込む
    require_once("Player.php");

    class Soccer extends Player
    {
        // インスタンスメソッド
        public function  play(){
            echo "{$this->name}がシュート！","\n";
        }
    }