<?php
 

if($_SERVER['REQUEST_METHOD']=='POST'){
require_once('connectionclass.php');
$obj=new connectionclass();
$fk_cat_id=$_REQUEST['fk_cat_id'];
$title=$_REQUEST['title'];
$description=$_REQUEST['desc'];
//echo($title);
$sql="insert into recepie(fk_cat_id,title,description) values('.$fk_cat_id.','$title','$description')";
$response=$obj->Manipulation($sql);
echo json_encode($response);
}
?>