<?php
function clean($data){
	
$data=htmlspecialchars($data);
$data=addslashes($data);
$data=trim($data);
return($data);	
}




?>