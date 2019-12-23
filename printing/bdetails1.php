<?php
if(isset($_POST['register']))
{
$con=pg_connect("host=localhost dbname=printing user=postgres password=redhat") or die ("cannot find connecion");
$f=$_POST['b'];
$l=$_POST['b1'];
$e=$_POST['b2'];
$p=$_POST['b3'];
$r=$_POST['b4'];
$q="insert into bdetails( binding_type ,lamination_type,numbering ,tto ,folding_type) values('".$f."','".$l."','".$e."','".$p."','".$r."')";
$rs=pg_query($q) or die("query error1");
if($rs)
{
$m="success";
echo "<script>alert('$m');</script>";
header('location:ddetails.php');
}
else
echo "eror";
}
?>
