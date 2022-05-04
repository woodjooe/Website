<?php
/*




function getDateDiff($z, $y, $x){

    $today = date("Y-m-d H:i:s");     // 2019-10-30 22:42:18(MySQL DATETIME format)
    $H=substr($today,11,2);
    $Mn=substr($today,14,2);
    $S=substr($today,17,2);
    $Y=substr($today,0,4);
    $M=substr($today,5,7);
    $D=substr($today,8,10);
    $CurrDate=new DateTime();
    $EventDate=new DateTime();
    $CurrDate->setDate(intval($Y), intval($M), intval($D));
    //$CurrDate=new DateTime($Y.'-'.$M.'-'.$D);
    $EventDate->setDate(intval($z), intval($y), intval($x));

    //$EventDate = new DateTime($z.'-'.$y.'-'.$x);
    $interval = date_diff($CurrDate, $EventDate);
    //$interval->format('z');
    $D=$interval->format('%R%a days');
    $D=substr(explode(' ', $D)[0],1);
    $Tod=array($D,$H, $Mn, $S);
    return $Tod;
}

*/

?>