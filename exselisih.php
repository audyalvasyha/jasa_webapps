<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "stock";

$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$sql = "SELECT Sys_Pack, Quantity_Case FROM in_gd WHERE id='1'";
$query = mysqli_query($db, $sql);
while($row = mysqli_fetch_array($query)){
    $a = $row['Sys_Pack'];
    $b = $row['Sys_Pack'] - $row['Quantity_Case'];
}
echo $b
?>