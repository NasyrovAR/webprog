<HTML>
<TITLE> Насыров Аскар ПИ-323</TITLE>
<BODY>
    Насыров Аскар ПИ-323<p>
Дана матрица А(m,n). Найти вектор В(n), каждый элемент которого равен сумме элементов
соответствующего столбца матрицы А. Исходный и скорректированный массивы
вывести на экран<p>
<TABLE>
<?php
$m = rand(1, 9);
$n = rand(1, 9); 
print_r("M=".$m. "  N=". $n. "<br>    ");
print_r("_   |");
for ($j = 1; $j <= $n; $j++) {
print_r("[$j]|");
}
print_r("<br>    ");
for ($i = 1; $i <= $m; $i++) { //Заполняем массива
    print_r("[$i]");
    for ($j = 1; $j <= $n; $j++) {

        $mass[$i][$j]=rand(-99, 99);
        print_r($mass[$i][$j]. "  ");
    }
print_r("<br>");
}
$i=1;
for ($k = 1; $k <= $m; $k++) {
    for ($j = 1; $j <= $m; $j++) { 
        $b[$k]=$b[$k]+$mass[$k][$j];

}
}
print_r($b);
?>
</TABLE>
</BODY>
</HTML>
</HTML>