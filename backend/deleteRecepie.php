<?php
require_once('connectionclass.php');
$obj=new ConnectionClass();
$rec_id=$_REQUEST['rec_id'];
$sql="delete from recepie where rec_id=$rec_id";
$res=$obj->Manipulation($sql);
echo json_encode($res);
?>