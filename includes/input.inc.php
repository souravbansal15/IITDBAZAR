<?php
include_once 'dbh.inc.php';

$v_name=$_POST['f_name'];
$v_hostel=$_POST['f_hostel'];
$v_contact=$_POST['f_contact'];
$v_ptype=$_POST['f_ptype'];
$v_pdes=$_POST['f_pdes'];
$v_psell=$_POST['f_psell'];

$sql="INSERT INTO posts (name, hostel, contact, ptype, pdes, psell) VALUES('$v_name','$v_hostel','$v_contact','$v_ptype','$v_pdes','$v_psell');";
mysqli_query($conn,$sql);
header("Location: ../index.php?add=success");
					exit();
?>
