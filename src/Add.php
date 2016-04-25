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
<title>Add Plan</title>
<body>
  <form method="post" action="addback.php" id="form1">
	<t4><a href="dest.php">Signout</a></t4>
	<h1>Add Tour Package!<br><br></h1>
	<h3>Package Place: <input type="text" name="place">
	<t1><t1><t1><t1>Theme:  
	    <select name="th" id="th" onchange="" size="1">
	    <option value="Any">Any</option>
	    <option value="adventure">Adventure</option>
	    <option value="leisure">Leisure</option>
	    <option value="romantic">Romantic</option>
	    <option value="spiritual">Spiritual</option>
	    <option value="shopping">Shopping and Night Life</option>
	    <option value="cultural">Cultural</option>
	    </select></t1></t1></t1></t1>
	<br><br>From Place: <input type="text" name="fromp">
	<t1><t2><t1><t1><t1>
	No.of Days: <input type = "number" name = "no" value="5"></t1></t2></t1></t1></t1>
	<br><br>
	Budget: <input type="text" name="budget" value="2000"> 
        <t1><t1><t3><t1><t1>Season:<select name="season" >
	    <option value="July-October">July-October</option>
	    <option value="November-February">November-February</option>
	    <option value="March-June">March-June</option></select></t1></t1></t3></t1></t1>
	<br><br> 
	Region:
	<select name="re" id="re" onchange="" size="1">
	  <!--  <option value="0">Any</option>-->
	    <option value="North">North</option>
	    <option value="South">South</option>
	    <option value="East">East</option>
	    <option value="West">West</option>
	</select>
	<t1><t2><t1><t1><t1><t1><t1>
	Image: <input type = "text" name = "image"></t1></t2></t1></t1></t1></t1></t1>
	<br><br>
	Hotel: <input type="text" name="hotels">
	<t1><t2><t1><t1><t1><t2><t2>
	Transport: <input type = "text" name = "transport"></t1></t2></t1></t1></t1></t2></t2>
	<br><br>
	Details: <input type = "text" name = "details"><br><br>
	<t1><t1><t1><t1><t1><input type="submit" name="submit" value="Add Plan!"></t1></t1></t1></t1></t1></t1>
	</h3>
  </form>
</body>
</html>
