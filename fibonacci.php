<?php 
$sum=0;
$first = 0;    
$second = 1;
for($i=0;$i<=400000;$i++)    
{    
    $fibonum = $first + $second;
    if($fibonum>=400000){
      break;
    }
    if($fibonum%2==0){
      $sum+=$fibonum;
    }
    echo $fibonum.", ";         
    $first=$second;       
    $second=$fibonum;     
}
echo "<br>Sum of Even numbers ".$sum;
?>