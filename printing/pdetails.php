<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" media="screen">
<script>
 function test()
{
        var amt=prompt("Enter Advance Amount in Rs. ");
      alert(amt);
       if(amt==null)
          alert("You Cancelled the job");
      else
       alert("Your printing job may Delivered to you within 5 days");

}
</script>
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
		<li><a href=feedback.html>Feedback</a></li>
                   


	</ul>
<br>
<br>
<form method="POST" action="pdetails1.php">
<fieldset>
        <legend>Printing Detail</legend>
	<br><br>
	<fieldset>
                Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="q">
                <option>250
                <option>500
                <option>1000
                <option>1500
                <option>2000
                <option>5000
                <option>10000
                </select><br><br>
Paper Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="q1">
                <option>60GSM
                <option>70GSM
                <option>80GSM
                <option>Art Paper
                <option>Color Paper
                <option>New Paper
                </select><br><br>
Binding Method&nbsp;&nbsp;<select name="q2">
                <option>Top Binding
                <option>Side Binding
</select><br><br>
Use of &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type=radio name=rd1 value=0>Master
<input type=radio name=rd1 value=1>Plate

</fieldset>
</fieldset>
<br><br>
<center>
<input type="submit" value="register" name="register">
<br>
<br>
<ul>
<li><a class="active" href="pdetails2.php">show schedule</a></li>
</ul>
<br>
<br>
        <a href=newcust.php><button type="button" style="height: 50px;width:100px">Cancel</button></a>
</center>
