<?php
$username="root";
$password="";
$server="localhost";
$con=mysqli_connect($server,$username,$password,"quiz");

/*if($con)
{
echo"connection successful";

}
else{
    echo"no connection";
}
*/
if(mysqli_connect_errno())
{
die("DB connection failed " .mysqli_connect_error() . "(" .mysqli_connect_errno);
}
?>