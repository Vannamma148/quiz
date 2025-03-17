<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>QUIZ</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    </head>
<body>
     <header class="header">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
            </label>
            <label class="logo"> QUIZER </label>
            <ul class="nav">
                <li><a  class="home" href="index.php">Home</a></li>
                <!--li><a href="#">Test</a></li-->
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">ADMIN</a></li>
            </ul>
        </nav>

        <div class="contain">
            <!--p><strong>Welcome to My quizer!</strong></p-->
        </div>
        </header>  
    <main>
        <div class="menu">
        <a href="main.php" class="button">HTML</a>
        <a href="cssq.php" class="button">CSS</a>
        <a href="jsq.php" class="button">JS</a>
        <a href="phpq.php" class="button">PHP</a>
        <!--<a href="jsq.php" class="button">GK</a>
           <a href="jsq_add.php" class="button">JSADD </a>  
        <a href="cssq_add.php" class="button">CSSADD </a>        
        <a href="add.php" class="button">Add Questions</a>-->
        </div>
    </main>
      <div class="copyright">
          Copyright 2021 &copy; AV148. All Rights Reserved
        </div>
</body>
</html>