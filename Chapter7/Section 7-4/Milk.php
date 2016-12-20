<?php

    /**
     * Created by PhpStorm.
     * User: Mu
     * Date: 2016/12/18
     * Time: 15:12
     */

    require_once ("DateTool.php");

    class Milk
    {
        // DateTool トレイトを使用する
        use DateTool;

        // プロパティ宣言
        public $theDate;
        public $limitDate;

        function __construct()
        {
            // 今日の日付
            $now = new DateTime();
            //年月日に直して設定する
            $this->theDate = $this->ymdString($now);
            // 10日後も日付
            $this->limitDate = $this->addYmdString($now,10);
        }
    }