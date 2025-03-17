<?php 
include 'connection.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $feedback=$_POST['textarea'];

    $query="insert into feedback values('$name','$email','$contact','$feedback');";

    $user=mysqli_query($con,$query);

    if($query)
    {
        echo "Your Feedback is submitted!";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Feedback</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <h1></h1>

<center>
<h2 align="center">Feedback</h2>

        <div>
            <form method="POST">
                <table class="cont" align="center">
                    <tr><td>Name:</td><td><input type="text" name="name"></td></tr>
                    <tr><td>Email:</td><td><input type="text" name="email"></td></tr>
                    <tr><td>Contact:</td><td><input type="text" name="contact"></td></tr>
                    <tr><td>Feedback:</td><td><textarea name="textarea"></textarea></td></tr>
                    <tr><td><input type="submit" name="submit" value="Submit"></td></tr>
                </table>
            </form>
        </div>
    </body>
</html>