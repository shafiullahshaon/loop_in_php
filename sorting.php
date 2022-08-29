<?php
$array = array(1,6,23,10,3,2,15,7);
for($i=0;$i<count($array)-1;$i++)
{
    for($j=0;$j<count($array)-$i-1;$j++)
    {
        if($array[$j]>$array[$j+1])
        {
            $temp=$array[$j];
            $array[$j]=$array[$j+1];
            $array[$j+1]=$temp;
        }
    }
}

echo "<pre>";
print_r($array);
echo "</pre>";