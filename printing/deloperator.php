<?php
if(isset($_POST['delete']))
{
$a=$_POST['d1'];
$con=pg_connect("host=localhost dbname=printing user=postgres password=redhat")or die("connection problem");
$q="delete from operator where login_id='$a'";
$rs=pg_query($q)or die("query error 1");
if($rs)
{
$m="delete success";
echo "<script>alert('$m');</script>";
}
if($rs)
{
header('location:upoperator.php');
}
else
{
$m="delete errror";
echo "<script>alert('$m');</script>";
}
}
?>

