<?php
//1
if (isset($_POST["firstButton"])) {
echo "Исходное слово: ".$_POST["t"]."<br>";
echo "Зашифрованное слово: ";
$string=$_POST["t"];
$arr = array ();
$strlen = mb_strlen ($string);
while ($strlen) {
$arr[] = mb_substr ($string, 0, 1);
$string = mb_substr ($string, 1, $strlen);
$strlen = mb_strlen ($string);
}
echo ($arr[count($arr)-3].$arr[count($arr)-2].$arr[count($arr)-1]);
for ($i = 0; $i <(count($arr)-3) ; $i++) {
echo ($arr[$i]);
}
}
//2
if (isset($_POST["secondButton"])) {

echo "Исходное текст: <br> ".$_POST["text2"]."<br>";
echo "Преобразованный текст: <br>";
$out_string=strtr($_POST["text2"], array("<i>" => "<курсив>", "<I>" => "<курсив>", "</i>" => "<конец курсива>", "</I>" => "<конец курсива>"));
 echo $out_string;   
}

//3
if (isset($_POST["thirdButton"])) {

$k=0;
$exA=array_unique (preg_split('//', $_POST['a'], -1, PREG_SPLIT_NO_EMPTY));
$exB=array_unique (preg_split('//', $_POST['b'], -1, PREG_SPLIT_NO_EMPTY));
for ($i = 0; $i <= array_pop( array_keys($exA)); $i++) {
    for ($j = 0; $j <= array_pop( array_keys($exB)); $j++) {
        if($exB[$j] == $exA[$i]){
            $k++;
        }
    }
}
if($k >= (count($exB))){
    $o='Можно';
    }   else {
        $o='Нельзя';
    }
$output ="
    <html>
    <head>
    <title>Проверка</title>
    </head>
    <body>
    Из букв, входящих в слово А, составить слово В - $o <br />
    <ul>";
    echo $output;

}
?>