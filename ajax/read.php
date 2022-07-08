<?php
require ($_SERVER["DOCUMENT_ROOT"]."/conf/db.php");


$sql = 'SELECT * FROM cardcode WHERE id > 1';

$resultSql = mysqli_query($link, $sql);

$result = [];

// while ($row = mysqli_fetch_array($result)) {
//     print("Карта: " . $row['cardcode'] . ";Дата: " . $row['date'] . "; Имя пользователя: . " . $row['name'] . "Id: " . $row['id'] . ";<br>");
// }

while ($row = mysqli_fetch_array($resultSql)) {
    $result[] = $row;
}


echo json_encode($result);

?>