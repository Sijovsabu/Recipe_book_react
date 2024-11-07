<?php
require_once('connectionclass.php');
$obj=new ConnectionClass();
$rec_id=$_POST['rec_id'];
$sql="select * from recepie where rec_id=$rec_id";
$data=$obj->getSingleRow($sql);
 
echo json_encode($data);
?>
