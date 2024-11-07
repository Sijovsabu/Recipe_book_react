<?php
require_once('connectionclass.php');
$sql="select * from categories";
$obj=new ConnectionClass();
$data=$obj->getTable($sql);
echo json_encode($data);
?>