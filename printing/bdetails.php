<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" media="screen">
<script>
 function test()
{
        var amt=prompt("Enter Advance Amount in Rs. ");
      alert(amt);
       if(amt==null)
          alert("You cancelled the job");
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
		<li><a href=feedback.php>Feedback</a></li>
                   


	</ul>
<form method="POST" action="bdetails1.php">
<fieldset>
        <legend>Binding Detail</legend>
        <br>
        <br>
	<fieldset>
                Binding Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="b">
                <option>Cover
                <option>Double&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <option>Cloth
                </select><br><br>
Lamination Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="b1">
                <option>Simple
                <option>Mat
                <option>Spot
                <option>None

                </select><br><br>
</select><br><br>
Numbering&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" size="1" name="b2">
To
<input type="text" size="1" name="b3"><br><br>
Folding Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="b4">
                <option>Vertical
                <option>Horizontal
                <option>None
                </select><br><br>


		</fieldset>
</fieldset>
<br><br>
<br><br>
<center>
<input type="submit" value="register" name="register">
<br>
<br>
<ul>
<li><a class="active" href="bdetails2.php">show schedule</a></li>
</ul>
<br>
<br>
		
        <a href=newcust.php><button type="button" style="height: 50px;width:100px">Cancel</button></a>
</center>
