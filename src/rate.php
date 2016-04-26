<?php
session_start();
if(isset($_SESSION["username"])) 
{
include 'Config.php';
if($conn->connect_error)
{
    die("Connection error".$conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
	$x=$_POST["rate"];
	$newchange=$x/5;
	$place=$_POST["place"];

	$sql=mysqli_query($conn,"SELECT rating FROM TRAVEL WHERE place='$place' ");
        $row=mysqli_fetch_assoc($sql);
 	$old= $row["rating"];
	echo $old;
	if($x>=$old)
	$new=$old+$newchange;
	else if($x<$old)
	$new=$old-$newchange;
	if($new>5)
	$new=5;
	else if($new<0)
	$new=0;
	echo $new;
	$sql1=mysqli_query($conn,"UPDATE TRAVEL SET rating=$new WHERE place='$place' ");
	if($sql==TRUE)
	header ("Location:ip.php");
}
}	