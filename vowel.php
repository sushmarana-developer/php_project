<?php 
$str = "applea";
$tot_str ='';
   for($i= 0; $i< strlen($str);$i++)
    {
        echo $i.$str[$i]."<br>";
        if($str[$i] == 'a' || $str[$i] == 'i' || $str[$i] == 'e' || $str[$i] == 'o' || $str[$i] == 'u' )
            {

                $tot_str++;
            }
       
    }
    echo "Total Vowels: $tot_str";
?>