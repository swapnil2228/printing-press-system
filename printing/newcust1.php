<?php
if(isset($_POST['register']))
{
$con=pg_connect("host=localhost dbname=printing user=postgres password=redhat") or die ("cannot find connecion");
$f=$_POST['cno'];
$l=$_POST['cname'];
$e=$_POST['cadd'];
$p=$_POST['contact'];
$r=$_POST['email'];
$q="insert into customerdetail( customer_no ,customer_name ,customer_address,contact_no , email_id ) values('".$f."','".$l."','".$e."','".$p."','".$r."')";
$rs=pg_query($q) or die("please fill all the details");
if($rs)
{
$m="success";
echo "<script>alert('$m');</script>";
header('location:newjob.php');
}
else
echo "eror";
}
?>
