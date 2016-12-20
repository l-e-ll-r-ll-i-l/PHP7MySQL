<?php

    /**
     * Created by PhpStorm.
     * User: Mu
     * Date: 2016/12/18
     * Time: 15:06
     */
    trait DateTool
    {
        // Datetimeを年月日の書式で返す
        public function ymdString($date){
            $dateString = $date->format('y年m月d日');
            return $dateString;
        }

        // 指定日日数後の年月日で返す
        public function addYmdString($date,$days){
            $date->add(new DateInterval("P{$days}D"));
            return $this->ymdString($date);
        }
    }