<html>
<head><title>contact</title>
<style>
#menu 
td, a{
text-align:center;
background-color:white;
color:#000;
text-decoration:none;
border-radius:20px;
font-size:20px;
}
#menu{
    margin-bottom:20px;
   
    width:53%;
}
body{
    background: url('./img/img7.jpg');
    background-size: cover;

    //background: linear-gradient(to left, #151529, crimson);
}

</style>
</head>
<body>
<table border="0" height="10%" width="100%" >
<tr>
<td style="background-color:transparent;color:white;font-size:2rem; " align="center" >
Feedack
</td>
</tr>
</table>

<!--table id="menu" height="3%" width="100%" align="center">
<tr>
<td><a href="adminhome.php">HOME</a></td>
<td><a href="contact.php">Contact</a></td>
<td><a href="reg.php">Admin</a></td>
</tr>
</table-->
<table align="center" height="8%" width="100%" bgcolor="white" border="1">
<tr>
<td>
<table  style="background-color:#1c1c35;color:white ; cellpadding="9" align="center" height="8%" width="100%" border="1">
<tr style="background-color:#000;color:whitesmoke;font-size:1.6rem;" align="center">
<td>Name</td>
<td>Email Address</td>
<td>Feedabck</td>
</tr>
<?php
include 'connection.php';
$display="select*from feedback";
$dis=mysqli_query($con,$display);
while($row=mysqli_fetch_array($dis)){?>
<tr>
<td align="center" ><?php echo $row['name'];?></td>
<td align="center" ><?php echo $row['email'];?></td>
<td align="center" ><?php echo $row['feedback'];?></td>
</tr>
<?php
}
?>

</table>
</td>
</tr>
</body>
</html>