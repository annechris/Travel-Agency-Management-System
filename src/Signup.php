<!DOCTYPE html>
<head>
<style> 
input[type=submit] 
    {
    background-color:black;
    border: none;
    color: white;
    padding: 16px 32px;
    font-size: 20px;
    text-decoration: none;
    margin: 4px 0px;
    cursor: pointer;
    }
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
    margin: 20px 400px 150px 45px;
    padding: 40px;
    border: 1px grey;
    color:black;
    font-size: 18px;
    background-color:lightblue;
    opacity: 0.6;
    }
    t1 
    {
    margin-left : 100px;
    }
    t2
    {
    margin-left : 20px;
    }
</style>
</head>
<html>
<body style=" font-family:calibri; ">
    <form method="post" action="signback.php" id="form1">
     <legend style="font-size:35px; font-weight:bold ;color:black; opacity:0.7; margin-left:350px">SignUp Details</legend>
	<br>
        <h5>Username: <input type="text" name="username" required>
	<t1>Email-id: <input type="email" name="Email_id" required></t1>
	<br><br>
	Age: <input type="int" name="age" required>
        <t1><t2><t2><t2>Sex:<input type="radio" name="sex" value="male"required> Male&nbsp;&nbsp;
        <input type="radio" name="sex" value="female"required> Female</t1></t2></t2></t2>
	<br><br>
        Address: <input type="text" name="address"required>
        <t1><t2>Phone Number:<input type="int" name="phone_no"required></t1></t2>
	<br><br>
        Password: <input type="password" name="password"required>
	<t1>Confirm password: <input type="password" name="confirmpassword"required></t1>
	<br><br>
        <input style="font-family:algerian;" type="submit" name="submit" value="SignUp!">
        </h5>
    </form>
<title>SignUp</title>
</body>
</html>
