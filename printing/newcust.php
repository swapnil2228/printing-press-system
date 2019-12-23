<!DOCTYPE html>

<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" media="screen">
</head>
<body>
	<ul>
		<li><a>File</a>
			<ul>
				<li><a href="newcust.php">New</a></li>
                               <li><a href="login.php">Exit</a></li>
			</ul>
		</li>
		<li><a>Samples</a>
                        <ul>
                                <li><a href="showsamples.php">Show</a></li>
                        </ul>
                </li>
		<li><a>Job Schedule</a>
                        <ul>
                                <li><a href="pdetails.php">Printing Job Card</a></li>
				  <li><a href="bdetails.php">Binding Job Card</a></li>                                
				<li><a href="ddetails.php">DTP Job Cards</a></li>
                        </ul>
                </li>
<!--<li><a>Department</a>
                        <ul>
                                <li><a>DTP Department</a></li>
                                <li><a>Printng Department</a></li>
                                <li><a>Binding Department</a></li>
                        </ul>
                </li>
		<li><a>Delivery</a>
                        <ul>
                                <li><a>Delivery Details</a></li>
                        </ul>
		</li>-->
		<li><a>LogOut</a>
                        <ul>
                                <li><a href="login.php">LogOut</a></li>
                        </ul>
                </li>
		<li><a>Help</a>
                        <ul>
                                <li><a href="help.php">Content</a></li>
				<li><a href="aboutus.php">About us<img src=/var/www/html/printing/aboutus.gif></a></li>
                        </ul>
                </li>
		<li><a href=feedback.php>Feedback</a></li>
                   


	</ul>
<br>
<br>
<font size=10 color=red>
<form method="POST" action="newcust1.php">
<FIELDSET>
<H2 align="center"> <b><i>SR PRINTING PRESS SYSTEM</i></b></H2></font>
</FIELDSET>
<br>
<br>
<ul>
<li><a class="active" href="newcust.php">New Customer</a></li>
<li><a href="existingcust.php">Existing Customer</a></li>
<li><a href="newjob.php">Job Details</a></li>
</ul>
<br>
<br>
<fieldset>
<br>
<legend>Customer Details</legend>
<fieldset>
Customer No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cno"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Customer Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cname"><br>
Customer Address:&nbsp;&nbsp;<input type="textarea" name="cadd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Contact No(+91):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="contact"><br>
Email Id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email">
</fieldset>
</fieldset>

<br>
<br>
<br>
<center>
<input type="submit" value="register" name="register">
</center>
	</body>

</html>


