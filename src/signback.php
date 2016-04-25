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
<body>
<?php
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
    $username=$_POST["username"];
    $pwd=$_POST["password"];
    $sex=$_POST["sex"];
    $email=$_POST["Email_id"];
    $age=$_POST["age"];
    $phno=$_POST["phone_no"];
    $address=$_POST["address"];
    $confirmpassword=$_POST["confirmpassword"];
    
    if($pwd!=$confirmpassword)
    {
        echo '<h5>Passwords does not match</h5>';
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo '<h5>Incorrect Email format</h5>';
    }
    
    else if(!preg_match("/^[0-9]{10}$/",$phno))
    {
        echo '<h5>Incorrect Phone Number</h5>';
        
    }
    
    else
{ 
    $sql=mysqli_query($conn,"INSERT INTO User(username,password,emailid,address,phone_number,age) VALUES('$username','$pwd','$email','$address','$phno','$age')");
   
    if($sql==TRUE)
    {
       echo '<h5>Registration Successful!</h5>';
       echo '<a href="Login.php">Click Here to Login</a>';
       
    }
    else
    {
        echo '<h5>Registration Unsuccessful</h5>';
    }
    
}}

?>
</body>