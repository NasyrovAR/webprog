<?php
$a = rand(-20,20);
$d = rand(-20,20);
$c = rand(-20,20);
echo '<br> a ='. $a;
echo '<br> d ='. $d;
echo '<br> c ='. $c;
echo '<br>';
print ('((2*c/d)+2)/(d- a*a-1))' . '=' . (((2*$c/$d)+2)/(d- $a*$a-1)) . '<br>');
?>