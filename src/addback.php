<html>
<style>
 body
    {
    background-image:url("b.jpg");
    opacity:0.9;
    background-size:100% ;
    background-repeat: no-repeat;
    padding: 15px;
    }
  
    h5
    {
    margin: 20px 400px 50px 45px;
    padding: 40px;
    border: 1px grey;
    color:black;
    font-size: 18px;
    background-color:lightblue;
    opacity: 0.6;
    }
a:link, a:visited 
	  {
	  margin: 20px 80px 150px 45px;
	  position: relative;	
	  background-color: lightblue;
	  color: black;
	  padding:30px;
	  font-size: 18px;
	  text-align: center;	
          text-decoration: none;
          display: inline-block;
	  }
          a:hover, a:active 
	  {
	  background-color: lightgrey;
	  }
</style>
<title>Add</title>
<body>
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
{   $place=$_POST["place"];
    $fromp=$_POST["fromp"];
    $theme=$_POST["th"];
    $days=$_POST["no"];
    $region=$_POST["re"];
    $image=$_POST["image"];
    $hotels=$_POST["hotels"];
    $transport=$_POST["transport"];
    $season=$_POST["season"];
    $budget=$_POST["budget"];
    $details=$_POST["details"];
$sql=mysqli_query($conn,"INSERT INTO TRAVEL(place,fromp,noofdays,budget,season,region,theme,details,hotels,transport,image) VALUES ('$place','$fromp',$days,$budget,'$season','$region','$theme','$details','$hotels','$transport','$image')");
if($sql==TRUE)
 { echo '<h5>Added Package Successfully!</h5>';
       echo '<a href="admin.php">Click Here to Continue</a>';}
else
echo "ERROR! Could'nt Add";

}
}
?>
</body>
