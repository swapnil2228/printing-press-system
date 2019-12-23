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
                            <ul>
                                <li><a href="pdetails.php">Printing Job Card</a></li>
				  <li><a href="bdetails.php">Binding Job Card</a></li>                                
				<li><a href="ddetails.php">DTP Job Cards</a></li>
                        </ul>   
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
				<li><a href="aboutus.php">About us<img src=/var/www/html/printing/aboutus.gif></a></li>
                        </ul>
                </li>
		<li><a href=feedback.php>Feedback</a></li>
                   


	</ul>
<br>
<br>
<font size=10 color=red>
<form method="POST" action="newjob1.php">
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
<legend>Job Details</legend>
<fieldset>
Job id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="jobid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Job Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="jobname"><br>
Printing type&nbsp;&nbsp;&nbsp; <select name="t">
<option value=0 selected>Visiting Card
<option value=1>Wedding Card
<option value=2>Invitation Card
<option value=3>Bill Book
<option value=4>Pamphlet
<option value=5>Letter Head
</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No of Books&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nobook"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pages per Book&nbsp;&nbsp;
 <select name="t1">
<option value=0 selected>100
<option value=1>50
</select>
</center>

</fieldset>
</fieldset>
<!--<font size=10 color=yellow><h2><b><i>BOOK SHOP MANAGEMENT SYSTEM</b></i></h2></font>-->

</center>

<br>
<br>
<br>
<center>
<input type="submit" value="register" name="register">
</center>
	</body>

</html>


