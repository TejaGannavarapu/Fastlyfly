<?php

$con = mysqli_connect("localhost","id17591497_fastlyfly","|&T}?c3o/L\6r5pm","id17591497_fastfly");
if(!$con)
{
	echo "Database Not Connected";
}

$a=$_POST['fname'];
$b=$_POST['email'];
$c=$_POST['number'];
$d=$_POST['subject'];
$e=$_POST['msg'];

$query=mysqli_query($con,"insert into users(fname,email,number,subject,msg) values('$a','$b','$c','$d','$e')");
if(!$query)
{
	echo "data not inserted<br>";
	echo "<a href='index.php'>GO Back</a>";
}
else
{
		echo "<script>alert("Enquiry Submitted Successfully");</script><br>";
	echo "<a href='index.php'>GO Back</a>";

}

?>