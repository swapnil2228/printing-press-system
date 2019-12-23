<?php
if(isset($_POST['register']))
{
$con=pg_connect("host=localhost dbname=printing user=postgres password=redhat") or die ("cannot find connecion");
$f=$_POST['q'];
$l=$_POST['q1'];
$e=$_POST['q2'];
$p=$_POST['rd1'];
$q="insert into pdetails(  qauntity , paper_type,binding_method,use_of) values('".$f."','".$l."','".$e."','".$p."')";
$rs=pg_query($q) or die("query error1");
if($rs)
{
$m="success";
echo "<script>alert('$m');</script>";
header('location:bdetails.php');
}
else
echo "eror";
}
?>
