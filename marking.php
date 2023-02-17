<?php
include_once 'crud.php';
include_once 'crud2.php';
?>


<!DOCTYPE html>
<html lang="en-CA">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Score</title>
    <style>
        .score {margin-bottom: 100px;}
    </style>
</head>


<?php
    $res = $MySQLiconn->query("SELECT * FROM assignment");
    while($row=$res->fetch_array()) {
?>
<body>
    <div class="container">
        <section class="studentanswer">
            <p>Student</b> <i><?php echo $row['studentid']; ?></i></p>
            <p>Assignment 1</b> <i><?php echo $row['q1']; ?></i></p>
            <p>Assignment 2</b> <i><?php echo $row['q2']; ?></i></p>
            <p>Assignment 3</b> <i><?php echo $row['q3']; ?></i></p>
        </section>
    </div>
<?php
}
?>

</body>
</html>