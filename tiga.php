<?php
$tinggi = 6 ;
for($i=$tinggi;$i>=1;$i--){
	
    for ($d=0; $d <= $tinggi-$i; $d++)  {
        echo "_";    }
     
    for($j=$i;$j>=1;$j--){
        echo "&nbsp;"."*"."&nbsp;";
    }
     
    echo "<br>";
 
}
?>