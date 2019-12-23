<?php
if(isset($_POST['register']))
{
$con=pg_connect("host=localhost dbname=printing user=postgres password=redhat") or die ("cannot find connecion");
$f=$_POST['p'];
$l=$_POST['p0'];
$e=$_POST['p1'];
$p=$_POST['p2'];
$r=$_POST['p3'];
$r1=$_POST['p4'];
$q="insert into ddetails(  product_size , color_type , color1 , color2 , sample , format ) values('".$f."','".$l."','".$e."','".$p."','".$r."','".$r1."')";
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
