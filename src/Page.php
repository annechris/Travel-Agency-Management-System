<html>
<style>
body
	{
	background-image: url("b.jpg");
	color: white;
	}
t1 
	{
	    margin:300px;
	    border: 1px grey;
	    color:#b71c1c;
	    font-size: 20px;
	    font-weight:bold;
	    font-family: "Comic Sans MS", cursive, sans-serif;
	   text-align: center;
        }
t3 
	{
	    margin: 80px;
	    border: 1px grey;
	    color:#b71c1c;
	    font-size: 20px;
	    font-family: "Comic Sans MS", cursive, sans-serif;
	    text-align: center;
	    
        }
h5
	{
	    margin: 20px ;
	    padding: 20px;
	    border: 1px grey;
	    color:#3e2723;
	    font-size: 25px;
	    
	}
</style>
<title>Booking</title>
<body>
<?php
session_start();
if(isset($_SESSION["username"])) 
{
$server="localhost";
$user="root";
$password="";
$dbname="Touragency";
$conn=mysqli_connect($server,$user,$password,$dbname);
if($conn->connect_error)
{
    die("Connection error".$conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
	$place=$_POST["place"];
	$budget=$_POST["budget"];
	$details=$_POST["details"];
	$noofdays=$_POST["noofdays"];
	$hotels=$_POST["hotels"];
	$transport=$_POST["transport"];
	$rating=$_POST["rating"];

	echo '<h5>',"You Have Selected This Package!",'</h5>';

	echo            '<t1>',$place,'</t1></div><br><br>
			<t1>','Number Of Days: ',$noofdays,'</t1><br><br>
			<t1>','Cost: INR ',$budget,'/-','</t1><br><br>
			<t1>','Rating: ',$rating,'</t1><br><br>
			<t1>','You can stay at: ',$hotels,'</t1><br><br>
		        <t1>','You can reach there by: ',$transport,'</t1><br>';
        echo '<h5>', "Please Contact Our Office For Payment And Booking! ",'</h5>';
	echo '<h5><form  method="post" action="rate.php" >',"Please Rate This Package Suggestion",'<select name="rate" id="rate">
	    <option value="0">0</option>
	    <option value="1">1</option>
	    <option value="2">2</option>
	    <option value="3">3</option>
	    <option value="4">4</option>
	    <option value="5">5</option></select><br><t1><input type="hidden" name="place" value="',$place,'"><t1><input type = "submit" value = "Submit"></t1></t1>
	    </form></h5>';
	

}
}
?>
</body>
</html>
