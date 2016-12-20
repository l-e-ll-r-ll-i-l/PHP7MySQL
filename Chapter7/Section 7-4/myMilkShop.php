<?php
    /**
     * Created by PhpStorm.
     * User: Mu
     * Date: 2016/12/18
     * Time: 15:15
     */

    require_once ("Milk.php");

    $myMilk = new Milk();
    echo "作成日:",$myMilk->theDate;
    echo "\n";
    echo "期限日:",$myMilk->limitDate;