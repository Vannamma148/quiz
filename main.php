<?php 

include 'connection.php';
$query="SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($con,$query)); //no of row return from function

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HTML</title>
        <link rel="stylesheet" type="text/css" href="page.css">
        
    </head>
<body>
<!--<header class="header">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
            </label>
            <label class="logo"> QUIZER </label>
            <ul class="nav">
                <li><a  class="home" href="index.php">Home</a></li>
                
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">ADMIN</a></li>
            </ul>
        </nav>-->


    <header>
        <div class="contain">
            <strong><p>QUIZER</p></strong>
        </div>
    </header>
    
    <main>
        <div class="container">
            <h2>ALL THE BEST!</h2>
            <h3>For your quiz test..</h3>
            <P>This is a multiple choise quiz to test your HTML Knowledge. </P>
            <ul>
              <li><strong>Number of Questions:</strong><?php echo $total_questions;?></li>
             <li><strong>TYPE:</strong>Multiple Choise</li>
             <li><strong>Estimated Time:</strong><?php echo $total_questions*1.5;?> </li>
            </ul>

            <a href="question.php?n=1" class="start">Start Quize</a>
            </div>
    </main>
       <footer>
        <div class="copyright">
        Copyright 2021 &copy; AV148. All Rights Reserved
        </div>
    </footer> 
        
</body>
</html>
