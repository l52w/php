<?php
    echo "1. 배열의 개념"."<br>"."배열이란 같은 타입의 변수들로 이루어진 유한 집합이다."."<br><br>";
    echo "2. 배열의 활용 사례"."<br>"."실생활에서 아파트 월세, 지점의 총매출과 평균 등을 구할 때 사용한다."."<br><br>";
    $sum = 0;
    $xyz = array(5,7,6,8);
    $arrlength = count($xyz);

    for($i=0; $i<$arrlength; $i++){
        $sum += $xyz[$i];
    }

    echo "합계 :".$sum;
?>