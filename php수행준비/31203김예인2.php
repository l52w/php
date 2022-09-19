<?php
    $sum = 0;
    $abc = array(2,5,7,6,8);
    $arrlength = count($abc);

    for($i=0; $i<$arrlength; $i++){
        $sum += $abc[$i];
    }
    echo "합계 : ".$sum;
?>