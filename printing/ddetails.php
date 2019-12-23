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
		<li><a href=feedback.php>Feedback</a></li>
                   


	</ul>
<form method="POST" action="ddetails1.php">
<fieldset>
	<legend>DTP Details</legend><br><br>
	<fieldset>
        Product size<select name="p">
        <option>1/4
        <option>A4
        <option>1/5
        <option>1/6
        </select><br><br>
color type
        <input type=radio name="p0" value=0>single color
        <input type=radio name="p0" value=1>double color
        <input type=radio name="p0" value=2>four color
        <br>
        <br>
        color 1<select name="p1">
        <option>red
        <option>green
        <option>yellow
        <option>blue
        </select><br><br>
         color 2<select name="p2">
        <option>black
        <option>skyblue
        <option>pink
        <option>orange
        </select><br><br>


        Sample <select name="p3">
<option value=0 selected>Visiting Card
<option value=1>Wedding Card
<option value=2>Invitation Card
<option value=3>Bill Book
<option value=4>Pamphlet
<option value=5>Letter Head
</select>
        <br><br>
        Format
  <input type="radio" name="p4" value=0>YES
        <input type=radio name="p4" value=1>NO


	</fieldset>
</fieldset>
<br><br>
<input type="submit" value="register" name="register">
<br>
<br>
<ul>
<li><a class="active" href="ddetails2.php">show schedule</a></li>
</ul>
<br>
<br>
<center>
       <a href="quotationbutton.php"> <button type="button" style="height: 50px;width:100px">quotation</button>
        <button type="button" style="height: 50px;width:150px" onclick=test()> Give Order</button>
        <a href=newcust.php><button type="button" style="height: 50px;width:100px">Cancel</button></a>
</center>
