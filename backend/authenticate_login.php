<?php
require_once("connectionclass.php");
$obj=new ConnectionClass();
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$sql="select * from admin where username='$username' and password='$password'";
$user=$obj->GetSingleRow($sql);
$responds=array();
$responds['status']=false;
// $responds['utype']='';
if ($user!=null)
{
    $responds['status']=true;
   // $responds['utype']=$user['utype'];

}
echo json_encode($responds);
?>