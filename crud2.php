<?php 
include_once 'db.php';

/* Post marks */
if(isset($_POST['marks'])) {

// $id = $MySQLiconn->real_escape_string($_POST['id']);
$student = $MySQLiconn->real_escape_string($_POST['student']);
$m1 = $MySQLiconn->real_escape_string($_POST['m1']);
$m2 = $MySQLiconn->real_escape_string($_POST['m2']);
$m3 = $MySQLiconn->real_escape_string($_POST['m3']);

//INSERT INTO table_name(Table_field_Name1, Table_field_Name2) VALUES('$var1','$var2')");
$SQL = $MySQLiconn->query("INSERT INTO marks(student,m1,m2,m3) VALUES('$student', '$m1', '$m2', '$m3')");

if(!$SQL) {
echo $MySQLiconn->error;
}
}
?>