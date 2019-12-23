<html>
<body>
<link href="style.css" type="text/css" rel="stylesheet" media="screen">
<ul>
		<li><a>File</a>
			<ul>
				<li><a href="newcust.php">New</a></li>
                               <li><a href="login.php">Exit</a></li>
			</ul>
		</li>
		<li><a>Customer</a>
                        <ul>
                                <li><a href="upcust.php">Delete Customer</a></li>
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

	<fieldset><form method="POST" name="f1" action="upoperator1.php">
		<legend>Add New Operator</legend>
		<br><br>
		Enter Operator Name<input type="text" name="op1" ><br><br>
		Enter Login Id<input type="text" name="op2"><br><br>
		Enter Password<input type="text" name="op3" ><br><br>
		Enter Confirm Password<input type="text" name="op4" ><br><br>
			<input type="submit" value="Add" name="add">
			<input type="button" value="clear" name="clear"></form></center>
		</fieldset>
			<br><br>
		<fieldset><form method="POST" name="f2" action="deloperator.php">
	                <legend>Delete Operator</legend>
                Enter operartor<input type="text" name="d1"><br><br>
		  <input type="submit" value="DELETE" name="delete">
</form>
			</fieldset>
</body>
</html>
