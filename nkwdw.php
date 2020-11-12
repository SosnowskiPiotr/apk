<?php
    $n = $_POST['cm1'];
    $i = 1;
    $j = 1;
    function spr($a)
    {
        global $n, $i;
        if ($a ** 2 < $n) {
            echo $a. "<br>";
            $i++;
        }
    }

    do{
        spr($i);
        $j++;
    } while ($j < $n);

?>