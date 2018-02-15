<?php
session_start();

require './phpfile/conn.php';

$Username=$_POST['Username'];
$Password=$_POST['Password'];

$sql="select * from admin where Username='$Username' and
	Password='$Password' ";
$result=mysqli_query($connect,$sql); 
$num=mysqli_num_rows($result);
if($result==1){
	$_SESSION['Username']=$Username;
	header("location:Home.html");
}else{
	if($result==2){
		$_SESSION['Username']=$Username;
		header("location:Home.html");
	}
}

	
 ?>
