<?php
    $a1 = 4;

    while($a1 < 30){
        echo ($a1 += 2);
    
        echo"<br>";

        if($a1 == 24){
            break;
        }
    }

?>