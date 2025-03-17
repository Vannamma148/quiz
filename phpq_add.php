<?php include 'connection.php';

if(isset($_POST['btn']))
{
    $qn=$_POST['question_number'];
    $qt=$_POST['question_text'];
    $cc=$_POST['correct_choice'];


//Arry
$choice=array();
$choice[1] = $_POST['choice1'];
$choice[2] = $_POST['choice2'];
$choice[3] = $_POST['choice3'];
$choice[4] = $_POST['choice4'];
$choice[5] = $_POST['choice5'];

//query for questions table

    $qry="insert into phpq(question_number,question_text) values('$qn','$qt')";

    $result = mysqli_query($con,$qry);


    //validate query

    if($result)
    {
        foreach($choice as $option =>$value){
            if($value !=""){
                if($cc==$option){
                    $is_correct=1;
                }
                else{
                    $is_correct=0;
                }
            

    //2query


            $query="insert into phpo(question_number, is_correct, phpoption) values('$qn','$is_correct','$value')";

            $insert_row = mysqli_query($con,$query);

        //validate2

            if($insert_row){
               continue;
            }else{
                die("2nd query for choices could not be executed!");
            }
        }
    }
    $message = "QUESTIONS has been added successfully";
}

}
    $query1 ="SELECT *FROM phpq";
    $questions = mysqli_query($con,$query1);
    $total = mysqli_num_rows($questions);
    $next = $total+1;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHPADD</title>
        <link rel="stylesheet" type="text/css" href="page.css">
    </head>
<body>
    <header>
        <div class="contain">
            <p>Quizer</p>
        </div>
    </header>
    
    <main>
        <div class="container">
            <h2>Add A Question</h2>
            <?php if(isset($message)){
                echo "<h4>".$message. "</h4>";
                } ?>

            <form method="POST" action=<?php echo $_SERVER['PHP_SELF'];?>>
                <p>
                    <label>Question Number:</label>
                    <input type="number" name="question_number" value="<?php echo $next; ?>">
                </p>

                <p>
                    <label>Question Text:</label>
                    <input type="text" name="question_text">
                </p>

                <p>
                    <label>Choice 1:</label>
                    <input type="text" name="choice1">
                </p>

                <p>
                    <label>Choice 2:</label>
                    <input type="text" name="choice2">
                </p>

                <p>
                    <label>Choice 3:</label>
                    <input type="text" name="choice3">
                </p>

                <p>
                    <label>Choice 4:</label>
                    <input type="text" name="choice4">
                </p>

                <p>
                    <label>Choice 5:</label>
                    <input type="text" name="choice5">
                </p>

                <p>
                    <label>Correct Option Number:</label>
                    <input type="text" name="correct_choice">
                </p>
                
                <input type="submit" class="btn" name="btn" value="Submit">
            </form>
        </div>
        <footer>
        <div class="copyright">
            Copyright 2021 &copy;AV148
        </div>
    </footer>
</body>
</html>