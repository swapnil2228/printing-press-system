
<html>
<head>
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
<br><br>
<br>
<?php
$con=pg_connect("host=localhost dbname=printing user=postgres password=redhat")or die("connection problem");
$q="select * from bdetails";
$result =pg_query($q);	
?>
<table width='100%' border=1>
<tr bgcolor='red'>
//table field name
	<th>binding_type</th>
	<th>lamination_type</th>
	<th>numbering </th>
	<th>to</th>
	<th>folding_type</th>
</tr>
<?php
	while($row=pg_fetch_row($result)){
?>
<tr>
	<td align='center'><?php echo $row[0]; ?></td>
	<td align='center'><?php echo $row[1]; ?></td>
	<td align='center'><?php echo $row[2]; ?></td>
	<td align='center'><?php echo $row[3]; ?></td>
	<td align='center'><?php echo $row[4]; ?></td>
</tr>
<?php
	}
?>
</table>
</body></html>

