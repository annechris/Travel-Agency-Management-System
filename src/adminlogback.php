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
<title>Admin</title>
<body>
<?php
 session_start();
 if(isset($_SESSION["username"])) 
 {
     echo '<h5>',"Already Logged In","</h5>";
   echo '<a href="admin.php">Click Here!</a>';
 }
 else
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
    $username=$_POST["username"];
    $pwd=$_POST["password"];
    $sql=mysqli_query($conn,"SELECT * FROM Admin WHERE username='$username'");
    if($sql!=TRUE)
    {
        echo '<h5>',"Invalid Username",'</h5>';
    }
    
    else
    {
        
        $row=mysqli_fetch_assoc($sql);
        $pass=$row['password'];
        if($pwd==$row['password'])
        {
            echo "<h5>Login Successful</h5>";
            $_SESSION["username"]=$username;
	    echo '<a href="admin.php">Click Here!</a>';
           
        }
        else
        {
            echo "<h5>Wrong username or password!</h5>";
        }
   }
}
}
?>
</body>