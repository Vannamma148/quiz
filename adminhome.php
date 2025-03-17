<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="style.css">
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
                
                <li><a href="contview.php">Feedack</a></li>
                <li><a href="contact.php">Contact</a></li>
                <strong><span><li><a href="reg.php">Add admin</a></li></span></strong>
            </ul>
        </nav>

        <div class="contain">
            <p><strong>ADMIN PANEL</strong></p>
        </div>
        </header>  
    <main>
        <div class="menu">
        
            <a href="add.php" class="button">HTML Questions</a>
            <a href="cssq_add.php" class="button">CSS Questions </a>   
            <a href="jsq_add.php" class="button">JS Questions</a>  
            <a href="phpq_add.php" class="button">PHP Questions</a>
        </div>
    </main>
      <div class="copyright">
    Copyright 2021 &copy; AV148.
        </div>
</body>
</html>