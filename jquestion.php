<?php 

    include 'connection.php';

    session_start();

    $number = $_GET['n']; //set question no

    $query ="SELECT * FROM jsq where question_number= $number"; //compare table qno from $number

    $result = mysqli_query($con,$query);
    $question = mysqli_fetch_assoc($result); //this function convert stored data into associative array
    
    //get options
    $query = "SELECT * FROM jso where question_number = $number";//all coices fetch from table
    $choices = mysqli_query($con,$query);

    //total questions
    $query ="SELECT * FROM jsq";
    $total_questions = mysqli_num_rows(mysqli_query($con,$query));

?>
<!DOCTYPE html>
<html>
    <head>
        <title>JSQ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="page.css" rel="stylesheet">
    </head>
    <body>
        <header>
                <div class="contain">
                <strong><p>Quizer</p></strong>
                </div>
        </header>
    
        <main>
                <div class="container">
                    <div class="current">Question <?php echo $number; ?> of <?php echo $total_questions; ?></div>
                    <p class="question"><?php echo $question['question_text']; ?></p>
                    <form method="POST" action="jprocess.php">
                        <ul class="choicess">
                        <?php
                        while($row=mysqli_fetch_assoc($choices)){ ?>
                        <li> <input type="radio" name="choice1" value="<?php echo $row['id']; ?>"> <?php echo $row['jsoption'];?></li>
                        <?php } ?>
                        </ul>
                        
                        <input type="hidden" name="number1" value="<?php echo $number;?>">
                        <input type="submit"  class="btn" name="submit"  value="SUBMIT">
                    </form>
                </div>
        </main>
    </body>
</html>