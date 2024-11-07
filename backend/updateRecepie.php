<?php
require_once('connectionclass.php');
$obj=new connectionclass();
$rec_id=$_REQUEST['rec_id'];
$title=$_REQUEST['title'];
$description=$_REQUEST['description'];
$sql="update recepie set title='$title',description='$description' where rec_id=$rec_id";
$response=$obj->Manipulation($sql);
echo json_encode($response);
?>