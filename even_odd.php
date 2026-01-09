<?php
//echo"hello";die;
$a= 10;
//$even ='';
//$odd = '';
$even =array();
$odd = array();
for($i=1;$i<=$a;$i++)
{
    if($i % 2 == 0)
    {
       // echo"Even Number: ".$i."<br>";
       //$even .= $i." ,";
       /* store i in array */
       $even[]= $i;
    }
    else{
       // echo"Odd Number:".$i."<br>";
       //$odd .= $i. ",";
       $odd[] = $i;
    }
   
}
//print_r($even);
 //echo "Even Numbers : " .$even."<br>";
   // echo "Odd Numbers: " .$odd[];
   echo "Even Numbers : ".implode(",", $even)."<br>";
    echo "Odd Numbers : ".implode(",", $odd)."<br>";
   
?>