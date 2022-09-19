<?php
	// 1차원 배열 출력
	$cars = array("Bmw","Volvo","Toyota");
	$arrlength=count($cars);

	for($i=0; $i<$arrlength; $i++){
		echo $cars[$i];
		echo"<br>";
	}

	// 1차원 배열 합계
	$sum = 0;
	$nums = array(14,12,11);
	$arrlength = count ($nums);

	for($i=0; $i<$arrlength; $i++){
		$sum += $nums[$i];
	}
	echo "합계 :".$sum;

	// 2차원 배열 출력
	$xy = array(
		array("서울","경기"),
		array("충남","강원")
	);
	for($i=0; $i<2; $i++){
		for($j=0; $j<2; $j++){
			echo $xy[$i][$j]."<br>";
		}
	}
?>