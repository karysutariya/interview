<?php
    echo "When input number is : 5";
    echo "<br>";
    $a = 5;
    
    for($i=0;$i<$a;$i++)
    {
        $b = 65;
        for($j=0;$j<$a;$j++)
        {
            if($i>=$j)
            {
                $c = chr($b+$j);
                echo $c;
            }
        }
        echo "<br>";
    }
?>