<TITLE> Задача 1-3 Вариант 1</TITLE>
<BODY>
<?php
 $n = rand(0,500);
 echo "N = $n <br> Делители: <br>";
   for ($i=1; $i<=$n; $i++){  
if ($n % $i==0)      
  echo "$i <br>";
}
?>