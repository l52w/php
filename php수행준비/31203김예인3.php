<?php
 $ab = array(
     array("성일","경기"),
     array("성남","서울")
 );

 for($m=0; $m<2; $m++){
     for($n=0; $n<2; $n++){
         echo $ab[$m][$n]."<br>";
     }
 }
?>