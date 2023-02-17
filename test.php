<?php
include_once 'crud.php';
?>

<!DOCTYPE html>
<html lang="en-CA">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <style>
        ul {list-style: none;}
    </style>
</head>

<body>
    <div class="container">
        <form method="post">
            <div>
                <h4>Studdent ID:</h4>
                <input type="text" name="studentid" maxlength="8" value="<?php if(isset($_GET['edit'])) echo $getROW['studentid']; ?>">
            </div>
            <div>
                <h4>When was BCITs 50th-anniversary celebration?</h4>
                <ul>
                    <li>A) 2016</li>
                    <li>B) 1967</li>
                    <li>C) 2017</li>
                    <li>D) 1987</li>
                </ul>
                <input type="text" name="q1" maxlength="1" value="<?php if(isset($_GET['edit'])) echo $getROW['q1']; ?>">
            </div>
            <div>
                <h4>Which of the following services does the LTC provide? Select all that apply.</h4>
                <ul>
                    <li>A) Technical illustration</li>
                    <li>B) Instructional design</li>
                    <li>C) Financial advice</li>
                    <li>D) Admission and Registration</li>
                    <li>E) Audio-visual loans</li>
                </ul>
                <input type="text" name="q2" maxlength="16" value="<?php if(isset($_GET['edit'])) echo $getROW['q2']; ?>">
            </div>
            <div>
                <h4>The current Prime Minister in Canada is (include the starting year for the PM) <input type="text" name="q3" value="<?php if(isset($_GET['edit'])) echo $getROW['q3']; ?>"></h4>
            </div>
            <button type="submit" name="save">Submit Answers</button>
        </form>
    </div>
</body>
</html>