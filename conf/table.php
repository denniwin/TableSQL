<?php
require ($_SERVER["DOCUMENT_ROOT"]."/conf/db.php");


$sql = 'SELECT * FROM cardcode WHERE id > 1';
$resultSql = mysqli_query($link, $sql);
$result = [];
?>