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
    $res = $MySQLiconn->query("SELECT * FROM assignments");
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

        <section class="score">
            <form method="post">
                <h4>Student ID: <input type="text" name="student" maxlength="8" value="<?php if(isset($_GET['edit'])) echo $getROW['student']; ?>"></h4>

                <h4>Assignement 1 Mark: <input type="text" name="m1" maxlength="1" value="<?php if(isset($_GET['edit'])) echo $getROW['m1']; ?>"></h4>

                <h4>Assignment 2 Mark: <input type="text" name="m2" maxlength="16" value="<?php if(isset($_GET['edit'])) echo $getROW['m2']; ?>"></h4>
                        
                <h4>Assignment 3 Mark: <input type="text" name="m3" value="<?php if(isset($_GET['edit'])) echo $getROW['m3']; ?>"></h4>
                
                <button type="submit" name="marks">Save Marks</button>
            </form>
        </section>
        <!-- <br><br> -->
    </div>
<?php
}
?>

</body>
</html>