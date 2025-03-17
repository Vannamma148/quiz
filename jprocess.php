<?php include 'connection.php'?>
<?php session_start();?>
<?php
    if(!isset($_SESSION['score'])){
        $_SESSION['score'] = 0;
    }

    if($_POST){

        $QUERY = "SELECT * FROM jsq";
        $total_question = mysqli_num_rows(mysqli_query($con,$QUERY));

        $number=$_POST['number1'];

        $selected_choice = $_POST['choice1'];

        $next = $number+1;

        $query = "SELECT * FROM jso where question_number = $number AND is_correct = 1";
        $result = mysqli_query($con,$query);
        $row=mysqli_fetch_assoc($result);

        $correct_choice = $row['id'];

        if($selected_choice == $correct_choice){
            $_SESSION['score']++;

        }

        if($number == $total_question){
            header("LOCATION:final.php");
        }else{
            header("LOCATION:jquestion.php?n=".$next);
        }
    }
?>