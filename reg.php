<?php
	
include 'connection.php';
 $errors=array();
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
        $contact = $_POST['no'];
		$password = $_POST['pwd'];
        $cpassword = $_POST['cpwd'];

		if(empty($name)){
			array_push($errors,"Enter Your Name!");
		}
		
		
		if(empty($email)){
			array_push($errors,"Enter Your email!");
		}
		
		if(empty($contact)){
			array_push($errors,"Enter Your No!");
		}
		
		if(empty($password)){
			array_push($errors,"Enter Your pwd");
		}

		if(empty($cpassword)){
			array_push($errors,"Enter Your cpwd");
		}

		$dbemail= "select* from reg where email='$email'";
		$exedb=mysqli_query($con,$dbemail);
		$count=mysqli_num_rows($exedb);
		if($count>0)
		{
			array_push($errors,"email already exist enter another email.");
		}
		else{
				if($password===$cpassword)
				{
					
				$insert_user = "insert into reg (name,email,contact,password,cpassword)
				values('$name','$email','$contact','$password', '$cpassword')";
				$run_supplier = mysqli_query($con, $insert_user);
        		if($run_supplier)
    			{
    			echo "<script>alert('Account Created Successfull,Thank You!');</script>";
    			echo "<script>window.open('login.php','_self');</script>";
    			} 
    		    else{
    			echo "<script>alert('Account not  Created!');</script>";
    				}
			}else
				{
					array_push($errors,"pwd not match");
				}
			}
			
		}
		
		
?> 
<!DOCTYPE html>
<html>
	<head>
		<title>Add Admin</title>
		<script type="text/javascript">
	function val()
	{
		if(document.reg.name.value=="")
		{
			alert("Please Enter Your first name!!");
			document.reg.name.focus();
			return false;
		}
	    if(document.reg.email.value=="")
		{
			alert("Please Enter Email ID");
			document.reg.email.focus();
			return false;
		}
		
		if(document.reg.no.value=="")
		{
			alert("Please Enter Mobile Number!");
			document.reg.no.focus();
			return false;
		}

		if(!/^[A-Za-z]*$/g.test(document.reg.name.value))
		{
			alert("Invalid characters in Ur name!!");
			document.reg.fname.focus();
			return false;
		}
        
        var nu=document.reg.no.value;
		var p=/^\d{10}$/;
		if(nu.match(p))
		{
			return true;
		}
		else
		{
			alert("Enter Valid Number!");
			document.reg.no.focus();
			return false;
		}
	</script>
	<link rel="stylesheet" href="form.css">
    </head>
	
	<body>
	<h1>Welcome Admin </h1><hr>
        <br>
    <center class="reg">
	 <table>
     
	    <form name="reg" class="box" method="POST" onsubmit="return(val());">
		<?php include'errors.php'?>
        <h2 align="center">Add New Admin</h2>
        <tr><td> Name</td>
        <td>
        <input type="text" placeholder="Name" name="name" id="t1" required/></td>
        </tr>
        <tr><td>Email ID</td><td>
        <input type="email" placeholder="Email ID" name="email" id="t1" required /></td>
        </tr>
        <tr>
        <td>
        Mobile No</td><td>
        <input type="number" placeholder="Mobile No" name="no" id="t1" required></td>
        </tr>
        <tr><td>Password</td><td>
        <input type="password" placeholder="Password" name="pwd" id="t1" required></td>
        </tr>
        <tr><td>
        <tr><td>
        Confirm Password</td><td>
        <input type="password" placeholder="Password" name="cpwd" id="t1" required></td>
        </tr>
        <tr><td>

        <tr><td colspan="2"><center>
        <input type="submit" name="submit" value="Submit" id="b1">
        <input type="reset" name="reset" value="Reset" id="b1"></center></td>
        </tr>
	 </form>
     
     </table>
     </center>
	</body>
</html>
