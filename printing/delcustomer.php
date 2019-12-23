<?php
if(isset($_POST['delete']))
{
$a=$_POST['cust1'];
$con=pg_connect("host=localhost dbname=printing user=postgres password=redhat")or die("connection problem");
$q="delete from customerdetail where customer_no='$a'";
$rs=pg_query($q)or die("query error 1");
if($rs)
{
$m="delete success";
echo "<script>alert('$m');</script>";
}
if($rs)
{
header('location:upcust.php');
}
else
{
$m="delete errror";
echo "<script>alert('$m');</script>";
}
}
?>

