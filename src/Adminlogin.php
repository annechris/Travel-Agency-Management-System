<html>
<head>
    <style>
	input[type=submit] 
 	{
        background-color:black;
    	border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 0px;
        cursor: pointer;
        }
	body
        {
        background-image: url("du.jpg");
        background-size:100% 170%  ;
        background-repeat: no-repeat;
        padding: 15px;
        }
	
        
    </style>
</head>
<body>
	<form method="post" action="adminlogback.php" id="form2">
	<h5>
	<legend style="font-size:40px; font-family:harrington;">Admin Login</legend> <br><br>
	<h2>Admin Name: <input type = "text" name="username" required style="font-size:20px"><br><br>
	Password: <input type = "password" name = "password" required style="font-size:20px"><br><br></h2>
	<input style="font-family:algerian;font-size:15px;" type="submit" name="submit" value="Login">
	</h5>
	</form>
</body>   
<title>Admin Login</title>    
</html>
