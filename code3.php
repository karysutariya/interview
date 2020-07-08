<?php
    $arr1 = array(6,8,'php',2.45,3.56);
    $arr2 = array(8,2.45,'php',3.56,6);
    sort($arr1);
    sort($arr2);
    if ($arr1 == $arr2)
    {
        echo "OUTPUT = Both arrays are same";
    }
    else
    {
        echo "OUTPUT = Both arrays are different";
    }
    echo "<br>";
    echo "<br>";
    echo "arr1 : ";
    for ($i=0;$i<5;$i++)
    {
        echo "<br>";
        print $arr1[$i];

    }
    echo "<br>";
    echo "<br>";
    echo "arr2 : ";
    for ($i=0;$i<5;$i++)
    {
        echo "<br>";
        print $arr2[$i];

    }
?>