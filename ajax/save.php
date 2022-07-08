<?php
require ($_SERVER["DOCUMENT_ROOT"]."/conf/db.php");

      //INSERT INTO cardcode VALUES('jjjjjjj','10/15','uuuu hhhhh',null)
$sql = "INSERT INTO cardcode VALUES('".$_POST['login']."','".$_POST['loginsec']."','".$_POST['message']."',null)";

$result = mysqli_query($link, $sql);

if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
}
else {
    echo "Данные успешно добавлены";
}