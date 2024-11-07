<?php
require_once('connectionclass.php');
$sql="select * from recepie";
$obj=new ConnectionClass();
$data=$obj->getTable($sql);
 
echo json_encode($data);
?>

 