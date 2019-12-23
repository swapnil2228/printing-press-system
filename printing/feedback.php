<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<link href="style.css" type="text/css" rel="stylesheet" media="screen">
<ul>
		<li><a>File</a>
			<ul>
				<li><a href="newcust.php">New</a></li>
                                <li><a href="login.php">Exit</a></li>
			</ul>
		</li>
		<li><a>Samples</a>
                        <ul>
                                <li><a>Show</a></li>
                        </ul>
                </li>
		<li><a>Job Schedule</a>
                        <ul>
                                <li><a href="pdetails.php">Printing Job Card</a></li>
				  <li><a href="bdetails.php">Binding Job Card</a></li>                                
				<li><a href="ddetails.php">DTP Job Cards</a></li>
                        </ul>
                </li>
		<li><a>LogOut</a>
                        <ul>
                                <li><a>LogOut</a></li>
                        </ul>
                </li>
		<li><a>Help</a>
                        <ul>
                                <li><a>Content</a></li>
				<li><a href="aboutus.php">About us<img src=aboutus.gif></a></li>
                        </ul>
                </li>
		<li><a href=feedback.php>Feedback</a></li>
                   


	</ul><br><br>
<h3>Contact Form</h3>

<div class="container">
  <form action="feedback1.php"  method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select name="country">
      <option value="australia">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
	<option value="usa">Australia</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="s1" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="submit">
<br>
<br>
<ul>
<li><a class="active" href="feedback2.php">show feedback</a></li>
</ul>
<br>
<br>
<br>
<br>
<center>
 <a href=newcust.php><button type="button" style="height: 100px;width:150px">Thank you for your feedback</button></a>
</center>  
</form>
</div>

</body>
</html>
