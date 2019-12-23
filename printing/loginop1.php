<?php
if(isset($_POST['login']))
{
$con=pg_connect("host=localhost dbname=printing user=postgres password=redhat") or die ("cannot find connecion");
$f=$_POST['usero'];
$l=$_POST['passo'];
$q="select * from operator";
$rs=pg_query($q) or die("error");
while($row=pg_fetch_row($rs))
{
if($f==$row[0] && $l==$row[2])
{
echo "succesfull";
header('location:newcust.php');
}
else
{
echo "You dont have a permission to login <br>";
}
}
}
?>
