<?php
include("config.php");
$cid=0;

$UPDATEQuery="UPDATE products SET Name='$_POST[t1]',Link='$_POST[t2]',Description=
'$_POST[t3]' WHERE Pid='$_POST[t5]'";
$cid=1;
echo $UPDATEQuery;
$conn->query($UPDATEQuery);	
echo"<script> window.location='allproduct.php'</script>";
