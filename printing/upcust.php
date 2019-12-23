<html>
<body>
<link href="style.css" type="text/css" rel="stylesheet" media="screen">
<ul>
		<li><a>File</a>
			<ul>
                               <li><a href="login.php">Exit</a></li>
			</ul>
		</li>
		<li><a>Operator</a>
                        <ul>
                                <li><a href="upoperator.php">Update Operator</a></li>
                        </ul>
                </li>
		<li><a>LogOut</a>
                        <ul>
                                <li><a href="login.php">LogOut</a></li>
                        </ul>
                </li>
		<li><a>Help</a>
                        <ul>
                                <li><a href="help.php">Content</a></li>
				<li><a href="aboutus.php">About us<img src=aboutus.gif></a></li>
                        </ul>
                </li>
		<li><a href=feedback.php>Feedback</a></li>
                   


	</ul>
<br>
<br>
	<font color="red" size="6" >
		<center><h1>Welcome To Admin</h1></center></font>
	<fieldset>
			<br><br>
		<fieldset><form method="POST" name="f2" action="delcustomer.php">
	                <legend>Delete Customer</legend>
                  Customer No<input type="text" name="cust1" ><br>
		  <input type="submit" value="DELETE" name="delete">
			</fieldset>

</body>
</html>
