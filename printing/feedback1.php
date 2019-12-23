<?php
if(isset($_POST['submit']))
{
$con=pg_connect("host=localhost dbname=printing user=postgres password=redhat") or die ("cannot find connecion");
$f1=$_POST['firstname'];
$l1=$_POST['lastname'];
$e1=$_POST['country'];
$p1=$_POST['s1'];
$q1="insert into feedback(first_name , last_name , country , subject  ) values('".$f1."','".$l1."','".$e1."','".$p1."')";
$rs1=pg_query($q1) or die("query error2");
if($rs1)
{
$m="success";
echo "<script>alert('$m');</script>";
header('location:feedback.php');
}
else
echo "eror";
}
?>
