<?php
if(isset($_POST['register']))
{
$con=pg_connect("host=localhost dbname=printing user=postgres password=redhat") or die ("cannot find connecion");
$f1=$_POST['jobid'];
$l1=$_POST['jobname'];
$e1=$_POST['t'];
$p1=$_POST['nobook'];
$r1=$_POST['t1'];
$q1="insert into jobdetail(job_id , job_name, no_of_books , pages_per_book,printing_type ) values('".$f1."','".$l1."','".$p1."','".$r1."','".$e1."')";
$rs1=pg_query($q1) or die("query error2");
if($rs1)
{
$m="success";
echo "<script>alert('$m');</script>";
header('location:pdetails.php');
}
else
echo "eror";
}
?>
