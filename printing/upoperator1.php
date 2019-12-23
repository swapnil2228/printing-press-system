<?php
if(isset($_POST['add']))
{
$con=pg_connect("host=localhost dbname=printing user=postgres password=redhat") or die ("cannot find connecion");
$f=$_POST['op1'];
$l=$_POST['op2'];
$e=$_POST['op3'];
$p=$_POST['op4'];
$q="insert into operator( opname,login_id,password ,confirm_password) values('".$f."','".$l."','".$e."','".$p."')";
$rs=pg_query($q) or die("query error1");
$flag=0;
if($flag==0)
{
$m="success";
echo "<script>alert('$m');</script>";
$flag++;
}
if($flag==1)
{
if($rs)
{

header('location:upoperator.php');
}
else
echo "eror";
}
}
?>
