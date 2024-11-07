<?php
require_once('connectionclass.php');
$cid=$_GET['cat_id'];
$sql="select * from recepie join where fk_cat_id=$cid";
$obj=new ConnectionClass();
$data=$obj->getTable($sql);
echo json_encode($data);
?>