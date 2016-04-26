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
    $travelfrom=$_POST["fr"];
    $theme=$_POST["th"];
    $departuredate=$_POST["da"];
    $month=$_POST["mo"];
    $year=$_POST["ye"];
    $days=$_POST["no"];
    $region=$_POST["re"];
    $min=$_POST["mi"];
    $max=$_POST["ma"];
    $min=$min-2000;
    $max=$max+2000;
    $c="cultural";
    $a="adventure";
    $s="spiritual";
    $n="shopping";
    $l="leisure";
    $r="romantic";
    $daymin=$days+2;
    $daymax=$days-2;
    if($min<0)
    {
        $min=0;
    }
    if($max>50000)
    {
        $max=50000;
    }
    

            
    if($theme==$s)
	        $sql=mysqli_query($conn,"CREATE VIEW travel1 AS SELECT * FROM TRAVEL WHERE (theme NOT LIKE 'Adventure' OR theme NOT LIKE 'Shopping') AND (budget BETWEEN $min AND $max) AND (noofdays <= $days) AND (region = '$region') AND (fromp ='$travelfrom')");
           else if($theme==$c)
       		 $sql=mysqli_query($conn,"CREATE VIEW travel1 AS SELECT * FROM TRAVEL WHERE (theme NOT LIKE 'Adventure')AND (budget BETWEEN $min AND $max) AND (noofdays <= $days) AND (region ='$region') AND (fromp ='$travelfrom')");
   	   else if($theme==$a)
        $sql=mysqli_query($conn,"CREATE VIEW travel1 AS SELECT * FROM TRAVEL WHERE (theme NOT LIKE 'Spiritual' OR theme NOT LIKE 'Cultural') AND (budget BETWEEN $min AND $max) AND (noofdays <= $days) AND (region = '$region') AND (fromp ='$travelfrom')");
    	   else if($theme==$n)
        $sql=mysqli_query($conn,"CREATE VIEW travel1 AS SELECT * FROM TRAVEL WHERE (theme NOT LIKE 'Adventure' OR theme NOT LIKE 'Spiritual') AND (budget BETWEEN $min AND $max) AND (noofdays <= $days)  AND (region = '$region') AND (fromp ='$travelfrom')");
           else if($theme==$l)
        $sql=mysqli_query($conn,"CREATE VIEW travel1 ASSELECT * FROM TRAVEL WHERE (theme NOT LIKE 'Spiritual') AND (budget BETWEEN $min AND $max) AND (noofdays <= $days)  AND (region = '$region') AND (fromp ='$travelfrom')");
           else if($theme==$r)
        $sql=mysqli_query($conn,"CREATE VIEW travel1 AS SELECT * FROM TRAVEL WHERE (theme NOT LIKE 'Spiritual' OR theme NOT LIKE 'Cultural') AND (budget BETWEEN $min AND $max) AND (noofdays <= $days)  AND (region = '$region') AND (fromp ='$travelfrom')");
	   else if($theme='Any')
	$sql=mysqli_query($conn,"CREATE VIEW travel1 AS SELECT * FROM TRAVEL WHERE (budget BETWEEN $min AND $max) AND (noofdays <= $days)  AND (region = '$region') AND (fromp ='$travelfrom')");
	
	if($month=="11"||$month=="12"||$month=="1"||$month=="2")
        	{$sql1=mysqli_query($conn,"SELECT * FROM travel1 WHERE season LIKE 'Nov%' ORDER BY rating DESC");
        	$sql2=mysqli_query($conn,"SELECT * FROM travel1 WHERE season LIKE 'Mar%' ORDER BY rating DESC");
        	$sql3=mysqli_query($conn,"SELECT * FROM travel1 WHERE season LIKE 'Jul%' ORDER BY rating DESC");}
    	else if($month=="3"||$month=="4"||$month=="5"||$month=="6")
		{$sql3=mysqli_query($conn,"SELECT * FROM travel1 WHERE season LIKE 'Nov%' ORDER BY rating DESC");
        	$sql1=mysqli_query($conn,"SELECT * FROM travel1 WHERE season LIKE 'Mar%' ORDER BY rating DESC");
        	$sql2=mysqli_query($conn,"SELECT * FROM travel1 WHERE season LIKE 'Jul%' ORDER BY rating DESC");}
    	else if($month=="7"||$month=="8"||$month=="9"||$month=="10")
		{$sql3=mysqli_query($conn,"SELECT * FROM travel1 WHERE season LIKE 'Nov%' ORDER BY rating DESC");
        	$sql1=mysqli_query($conn,"SELECT * FROM travel1 WHERE season LIKE 'Mar%' ORDER BY rating DESC");
       	        $sql2=mysqli_query($conn,"SELECT * FROM travel1 WHERE season LIKE 'Jul%' ORDER BY rating DESC");}

 	$sql4=mysqli_query($conn,"DROP VIEW travel1");
    }
 
    else
    {
        echo "Not logged in";
    }
}
?>
<html>
<style>
	div.img 
	{
	    margin: 5px;
	    border: 1px solid #ccc;
	    float: left;
	    width: 410px;
	      height: 650px;
	}
	
	div.img:hover 
	{
	    border: 1px solid #777;
	}

	div.img img {
	    width: 100%;
	    height: 195px;
	}
	
	div.desc {
	    color: "white";
	    padding: 2px;
	    text-align: center;
	}
	div.desc1 {
	    color: "white";
	    padding: 2px;
	    text-align: left;
	}
	
	
	body
	{
	   background-image:url("sky.jpg");
	    opacity:0.9;
	    background-size:100% ;
    	    padding: 5px;
    	}
    
	h5
	{
	    margin: 50px ;
	    padding: 40px;
	    border: 1px grey;
	    color:dark grey;
	    font-size: 25px;
	    background-color:lightblue;
	    opacity: 0.3;
	}
	t1 
	{
	    margin: 1px;
	    border: 1px grey;
	    color:#a7ffeb;
	    font-size: 15px;
	     font-family: "Comic Sans MS", cursive, sans-serif;
	    background-color:lightblue;
	    opacity: 0.8;
	    
        }
	t3 
	{
	   
	    text-align: left;
	    
        }	
        t2
        {font-weight: bold;
	    margin-left : 23px;
 	    border: 1px grey;
	    color:#eeff41 ;
	    font-size: 20px;
	    opacity: 0.9;
	}
</style>
<title>Packages</title>
<body>
<?php
echo'<div class="desc"><h5>Select Your Package</h5></div>';
 if($sql1==TRUE)
    {
        while($row1=mysqli_fetch_assoc($sql1))
        {   
	
			$x=$row1["image"];
			echo	'<div class="img">
			<a target="_blank" href="agra.jpg">
		        <img src="',$x,' "width="300" height="200">
			</a><t1>
			<div class="desc"><t2>',$row1["place"],'</t2></div>
			<div class="desc">','Number Of Days: ',$row1["noofdays"],'</div>
			<div class="desc">','Theme: ',$row1['theme'],'</div>
			<div class="desc">','Cost: INR ',$row1["budget"],'/-','</div>
			<div class="desc">','Season: ',$row1["season"],'</div>
			<div class="desc">','Rating: ',$row1["rating"],'</div>
			<div class="desc">','You can stay at: ',$row1["hotels"],'</div>
		        <div class="desc">','You can reach there by: ',$row1["transport"],'</div>
			<div class="desc1">','About: ',$row1['details'],'</div>
			<div class="desc"><form method="post" action="Page.php" id="form1"><input type="submit" name="submit" value="Go for it!">
			<input type="hidden" name="place" value="',$row1['place'],'">
			<input type="hidden" name="noofdays" value="',$row1['noofdays'],'">
			<input type="hidden" name="budget" value="',$row1['budget'],'">
			<input type="hidden" name="hotels" value="',$row1['hotels'],'">
			<input type="hidden" name="transport" value="',$row1['transport'],'">
			<input type="hidden" name="rating" value="',$row1['rating'],'">
			<input type="hidden" name="details" value="',$row1['details'],'">
			</form></div></div></t1>';
			
	       
        }
    }
    
if($sql2==TRUE)
    {
        while($row2=mysqli_fetch_assoc($sql2))
        {   
	
			$x=$row2["image"];
			echo	'<div class="img">
			<a target="_blank" href="agra.jpg">
		        <img src="',$x,' "width="300" height="200">
			</a><t1>
			<div class="desc"><t2>',$row2["place"],'</t2></div>
			<div class="desc">','Number Of Days: ',$row2["noofdays"],'</div>
			<div class="desc">','Theme: ',$row2['theme'],'</div>
			<div class="desc">','Cost: INR ',$row2["budget"],'/-','</div>
			<div class="desc">','Season: ',$row2["season"],'</div>
			<div class="desc">','Rating: ',$row2["rating"],'</div>
			<div class="desc">','You can stay at: ',$row2["hotels"],'</div>
		        <div class="desc">','You can reach there by: ',$row2["transport"],'</div>			
			<div class="desc1">','About: ',$row2['details'],'</div>
			<div class="desc"><form method="post" action="Page.php" id="form1"><input type="submit" name="submit" value="Go for it!">
			<input type="hidden" name="place" value="',$row2['place'],'">
			<input type="hidden" name="noofdays" value="',$row2['noofdays'],'">
			<input type="hidden" name="budget" value="',$row2['budget'],'">
			<input type="hidden" name="hotels" value="',$row2['hotels'],'">
			<input type="hidden" name="transport" value="',$row2['transport'],'">
			<input type="hidden" name="rating" value="',$row2['rating'],'">
			<input type="hidden" name="details" value="',$row2['details'],'">
			</form></div></div></t1>';
			
	       
        }
    }
    
if($sql3==TRUE)
    {
        while($row3=mysqli_fetch_assoc($sql3))
        {   
			$x=$row3["image"];
			echo	'<div class="img">
			<a target="_blank" href="agra.jpg">
		        <img src="',$x,' "width="300" height="200">
			</a><t1>
			<div class="desc"><t2>',$row3["place"],'</t2></div>
			<div class="desc">','Number Of Days: ',$row3["noofdays"],'</div>
			<div class="desc">','Theme: ',$row3['theme'],'</div>
			<div class="desc">','Cost: INR ',$row3["budget"],'/-','</div>
			<div class="desc">','Season: ',$row3["season"],'</div>
			<div class="desc">','Rating: ',$row3["rating"],'</div>
			<div class="desc">','You can stay at: ',$row3["hotels"],'</div>
		        <div class="desc">','You can reach there by: ',$row3["transport"],'</div>			
			<div class="desc1">','About: ',$row3['details'],'</div>
			<div class="desc"><form method="post" action="Page.php" id="form1"><input type="submit" name="submit" value="Go for it!">
			<input type="hidden" name="place" value="',$row3['place'],'">
			<input type="hidden" name="noofdays" value="',$row3['noofdays'],'">
			<input type="hidden" name="budget" value="',$row3['budget'],'">
			<input type="hidden" name="hotels" value="',$row3['hotels'],'">
			<input type="hidden" name="transport" value="',$row3['transport'],'">
			<input type="hidden" name="rating" value="',$row3['rating'],'">
			<input type="hidden" name="details" value="',$row3['details'],'">
			</form></div></div></t1>';
			
	      
 	}
    }
    
    
    else
    {
        echo "Incorrect Details";
    }
?>
    </body>
</html>

