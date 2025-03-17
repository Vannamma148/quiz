<?php 
session_start();
?>
<html>
    <head>
        <title>Result</title>
        <link rel="stylesheet" type="text/css" href="page.css">
    </head>
<body>
<script type = "text/Javascript">
setTimeout(function(){
	window.location.href="index.php"
},10000);

</script>

    <header>
        <div class="contain">
        <strong><p><u>Quizer:)</u></p></strong>
        </div>
    </header>
    <main>
         <div class="container">
         <h2>Your Result </h2>
         <p>Congratulation you have completed this test.</p>
         <p>Your <strong>Score</strong> is <?php echo $_SESSION['score'];?></p>
         <?php unset($_SESSION['score']);?>
         </div>
         <div class="p">
             <p>Wait a minute you will get back to HOME page.</p>
         </div>
    </main>
    <footer>
    <div class="copyright">
    Copyright 2021 &copy; AV148. All Rights Reserved
        </div>
    </footer>
    </body>
</html>