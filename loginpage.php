<?php
 $con=mysqli_connect("localhost","root","") or die("Connection unsuccessful");
 if(isset($_REQUEST['b']))
 {
    $db=mysqli_select_db($con,'csea') or die("no database");
    $username=$_REQUEST['uname'];
    $password=$_REQUEST['pwd'];
    $q="select * from logintable";//where username='$username' and password='$password'";
    $result=mysqli_query($con,$q);
	while($row=mysqli_fetch_array($result))
	{
		if($row['username']==$username)
		{
			if($row['password']==$password)
			{
				echo "<center><h2>successful login</h2></center>";
			}
			else
			{
				echo "<center><h2>unsuccessful login </h2></center>";
			}
		}
	}
	/*if(mysqli_num_rows[$result]>0)
	{
		echo "<center><h2>successful login</h2></center>";
	}
	else
	{
				echo "<center><h2>unsuccessful login </h2></center>";
	}*/
 }
 mysqli_close($con);
?>