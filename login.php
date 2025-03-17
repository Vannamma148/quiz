<?php
include 'connection.php';
        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sel_user = "select * from reg where email='$email' AND password='$password'";
            $run_user = mysqli_query($con, $sel_user);    
            $check_supplier = mysqli_num_rows($run_user);

            if ($check_supplier==1) {
                    $_SESSION['email']=$email;
                    echo "<script>window.open('adminhome.php', '_self')</script>";
            }
            else {
                    echo "<script>alert('Username or Password is incorrect,try again')</script>";
            }
        }
		
    ?>
<!DOCTYPE html>
<html>
<head>
<title>login</title>
<script type="text/javascript">
function val()
	{
	if(document.reg.email.value=="")
		{
			alert("Please Enter Your Email ID!");
			document.reg.email.focus();
			return false;
		}
		if(document.reg.pwd.value=="")
		{
			alert("Please Enter Password!");
			document.reg.pwd.focus();
			return false;
		}
		var b=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	  		if(b.reg(email)==false)
		{
			alert("Enter valid Email Id!");
		}
		
	}
	function send_data(){
		var email=document.getElementsByName("email").value;
		var pwd=document.getElementsByName("pwd").value;

		var httpr=new XMLHttpRequest();
		httpr.open("POST","./quiz/login.php",true);
		httpr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		httpr.onreadystatechange=function(){
			if(httpr.readyState==4 && httpr.status==200)
			{
				document.getElementsById("response").innerHTML=httpr.responseText;
			}
		}
		httpr.send("email="+email+"+pwd"+pwd);
	}
</script>
<link rel="stylesheet" type="text/css" href="login.css"></head>

<body>
<h1><marquee scrollamount="18">Welcome to QUIZER</marquee></h1>

<div class="log">
<center>
<h3 align="center">Login</h3>
	
<form class="box" name="login" method="post" onsubmit="return(val());">
<b>Email</b>    <input type="email" name="email" id="t1"><br><br>

<b>Password</b>	<input type="password" name="password" id="t2"><br><br>
 <input type="submit" name="login" value="Login"  onclick="send_data()" id="b1">
 <input type="reset" name="reset" value="Reset" id="b2">

</center>
</div>
</body>
</html>