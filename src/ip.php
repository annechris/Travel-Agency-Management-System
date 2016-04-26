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
<title>Create Plan</title>
<body>
  <form method="post" action="ipback.php" id="form1">
	<t4><a href="destroy.php">Signout</a></t4>
	<h1>Create Your Tour Package!<br><br></h1>
	<h3>Travelling From: <?php
	session_start();

if(isset($_SESSION["username"])) 
{
include 'Config.php';
if($conn->connect_error)
{
    die("Connection error".$conn->connect_error);
}
	 $sql=mysqli_query($conn,"SELECT DISTINCT fromp FROM TRAVEL" );
	echo '<select name="fr" >';
	while($row=mysqli_fetch_assoc($sql))
	{
	 echo '<option value="',$row['fromp'],'">',$row['fromp'],'</option>';
	    
	}
	echo '</select>';
}
	    ?>
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
	<br><br>
	Date Of Departure:
	<select name="da" id="da" onchange="" size="1">
	    <option value="01">01</option>
	    <option value="02">02</option>
	    <option value="03">03</option>
	    <option value="04">04</option>
	    <option value="05">05</option>
	    <option value="06">06</option>
	    <option value="07">07</option>
	    <option value="08">08</option>
	    <option value="09">09</option>
	    <option value="10">10</option>
	    <option value="11">11</option>
	    <option value="12">12</option>
	    <option value="13">13</option>
	    <option value="14">14</option>
	    <option value="15">15</option>
	    <option value="16">16</option>
	    <option value="17">17</option>
	    <option value="18">18</option>
	    <option value="19">19</option>
	    <option value="20">20</option>
	    <option value="21">21</option>
	    <option value="22">22</option>
	    <option value="23">23</option>
	    <option value="24">24</option>
	    <option value="25">25</option>
	    <option value="26">26</option>
	    <option value="27">27</option>
	    <option value="28">28</option>
	    <option value="29">29</option>
	    <option value="30">30</option>
	    <option value="31">31</option>
	</select>
	<select name="mo" id="mo" onchange="" size="1">
	    <option value=1>January</option>
	    <option value=2>February</option>
	    <option value=3>March</option>
	    <option value=4>April</option>
	    <option value=5>May</option>
	    <option value=6>June</option>
	    <option value=7>July</option>
	    <option value=8>August</option>
	    <option value=9>September</option>
	    <option value=10>October</option>
	    <option value=11>November</option>
	    <option value=12>December</option>
	</select>
	<select name="ye" id="ye" onchange="" size="1">
	    <option value="2016">2016</option>
	    <option value="2017">2017</option>
	    <option value="2018">2018</option>
	    <option value="2019">2019</option>
	    <option value="2020">2020</option>
	    <option value="2021">2021</option>
	    <option value="2022">2022</option>
	    <option value="2023">2023</option>
	    <option value="2024">2024</option>
	    <option value="2025">2025</option>
	    <option value="2026">2026</option>
	    <option value="2027">2027</option>
	</select>
	<t1><t2><t1>
	No.of Days: <input type = "number" name = "no" value="5"></t1></t2></t1>
	<br><br>
	Minimum Budget: <input type="text" name="mi" value="2000"> 
        <t1><t1><t3>Maximum Budget: <input type="text" name="ma" value="10000"> </t1></t1></t3>
	<br><br> 
	Region:
	<select name="re" id="re" onchange="" size="1">
	     <option value="South">South</option>
	    <option value="North">North</option>
	    <option value="East">East</option>
	    <option value="West">West</option>
	</select>
	<br><br>
	<t1><t1><t1><t1><t1><input type="submit" name="submit" value="Create Plan!"></t1></t1></t1></t1></t1>
	</h3>
  </form>
</body>
</html>
