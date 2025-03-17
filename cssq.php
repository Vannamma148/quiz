<?php 

include 'connection.php';
$query="SELECT * FROM cssq";
$total_questions = mysqli_num_rows(mysqli_query($con,$query)); //no of row return from function

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CSS</title>
        <link rel="stylesheet" type="text/css" href="page.css">
    </head>
<body>
    <header>
        <div class="contain">
        <strong><p>Quizer</p></strong>
        </div>
    </header>
    
    <main>
        <div class="container">
            <h2>ALL THE BEST!</<h2>
            <h3>For your quiz test..</h3>
            <P>This is a multiple choise quiz to test your CSS Knowledge. </P>
            <ul>
              <li><strong>Number of Questions:</strong><?php echo $total_questions;?></li>
             <li><strong>TYPE:</strong>Multiple Choise</li>
             <li><strong>Estimated Time:</strong><?php echo $total_questions*1.5;?> </li>
            </ul>

            <a href="cquestion.php?n=1" class="start">Start Quize</a>
            </div>
    </main>
       <footer>
        <div class="copyright">
            Copyright &copy;AV148
        </div>
    </footer> 
        
</body>
</html>
