<html>
<head>
  <style>
	input[type=submit] 
   	       {
	       font-size: 17px;
	       font-weight:bold;
	       margin: 4px 0px;
	       cursor: pointer;
	       background-color: #ffc740;
	       color: black;
	       padding: 10px 20px;
	       text-align: center;
               }
	body
		{
		background-image: url("london.jpg");
		opacity: 0.8;
		}
	div 
		{
		width: 320px;
	    	padding: 10px;
	    	border: 5px solid gray;
	   	}

	h3
		{
		margin: 0px 180px 0px 180px;
		padding: 35px;
		border: 1px solid gray;
	    	outline-color: black;
		background-color: gray;
		opacity: 0.8;
		color: #ffd740;
		font-family: Arial, Helvetica, sans-serif;
		font-style: bold;
		}
	h1	
		{
		margin: 30px 450px;
		color:#ffd740;
		font-family: Arial, Helvetica, sans-serif;
		font-style: bold;
		}
	a:link, a:visited 
		{
		margin: auto ;
		position: relative;	
		background-color: #ffd740;
		color: #424242;
		padding: 10px 20px;
		text-align: center;	
	        text-decoration: none;
	        display: inline-block;
		}
	a:hover, a:active 
		{
                background-color: #ffc400;
		}
	t1 
		{
	        margin-left : 70px;
		}
	t2 
		{
	 	margin-left : 20px;
		}
	t3
		{
		margin-left : 56px;
		}
	t4
		{
		margin-left : 1175px;
		}
	
	</style>
</head>
<title>Delete Plan</title>
<body>
  <form method="post" action="delback.php" id="form1">
	<t4><a href="dest.php">Signout</a></t4>
	<h1>Delete Tour Package!<br><br></h1>
	<h3>Package Place: <input type="text" name="place">
	<br><br>From Place: <input type="text" name="fromp">
	<t1><t2><t1><t1><t1>
	<br><br>
	<t1><t1><t1><t1><t1><input type="submit" name="submit" value="Delete Plan!"></t1></t1></t1></t1></t1></t1>
 </form>
</body>
</html>