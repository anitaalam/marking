<?php 
include_once 'db.php';

/* code for data insert*/
if(isset($_POST['save'])) {

        // $id = $MySQLiconn->real_escape_string($_POST['id']);
        $studentid = $MySQLiconn->real_escape_string($_POST['studentid']);
        $q1 = $MySQLiconn->real_escape_string($_POST['q1']);
        $q2 = $MySQLiconn->real_escape_string($_POST['q2']);
        $q3 = $MySQLiconn->real_escape_string($_POST['q3']);
        
    //INSERT INTO table_name(Table_field_Name1, Table_field_Name2) VALUES('$var1','$var2')");
    $SQL = $MySQLiconn->query("INSERT INTO assignments(studentid,q1,q2,q3) VALUES('$studentid', '$q1', '$q2', '$q3')");

    if(!$SQL) {
        echo $MySQLiconn->error;
    }
}
/* end code for data insert */


/* code for data update */
if(isset($_POST['update'])) {
    /* UPDATE table_name SET fn='"ffield_name1"']."', ln='"ffield_name2"' WHERE id="editButton" */
    $SQL = $MySQLiconn->query("UPDATE marks SET m1='".$_POST['m1']."', m2='".$_POST['m2']."', m3='".$_POST['m3']."' WHERE id=".$_GET['edit']);
}
/* end code for data update */

