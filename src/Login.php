<!DOCTYPE html>
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
        background-size:100% 165%  ;
        background-repeat: no-repeat;
        padding: 15px;
        }
        h5
    	{
   	margin: 0px 800px 0px 75px;
    	padding: 20px;
    	border: 1px grey;
    	outline-color: black;
	font-size:30px;
    	}
	h3
	{
	margin: 0px 600px 0px 75px;
    	padding-left: 50px;
	padding-top:20px;
	padding-bottom: 20px;
    	border: 1px grey;
    	outline-color: black;
	font-size:20px;
    	background-color:lightcyan;
    	opacity: 0.5;
	}
 </style>
</head>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <body style=" font-family:calibri; ">
     <form method="post" action="log.php" id="form1">
     <h5> <legend style="font-size:35px; font-weight:bold ;color:black; opacity:0.7; margin-left:10px">Login</legend> </h5>
     <h3>
	Username :<br><input type="text" name="username"required style="font-size:20px"><br><br>
	Password :<br><input type="password" name="password"required style="font-size:20px"><br><br>
	<input style="font-family:algerian;font-size:15px;" type="submit" name="submit" value="Login">
     </h3>
     </form>
 <title>Login</title>
 </body>
</html>
