<html><body>
<?php
require_once 'connect.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
} // установление соединения с сервером
	
	
$id_stores=$_GET['id_stores'];    
$stores_name=$_GET['stores_name'] ;    
$stores_url=$_GET['stores_url'];

$zapros="UPDATE stores SET stores_name='$stores_name', stores_url='$stores_url' 
WHERE id_stores='$id_stores'";

$result = $mysqli->query ($zapros);

if ($result) {
        echo "Все сохранено.<a href=stores.php> Вернуться к списку магазинов </a>";
} else {
        echo "Ошибка сохранения.<a href=stores.php> Вернуться к списку магазинов </a>";
    
}
?>
</body>
</html>