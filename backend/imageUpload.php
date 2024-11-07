<?php
$uploadDir = 'uploads/'; // Create this folder in your backend directory
$response=array();
if (!file_exists($uploadDir)) {
  mkdir($uploadDir, 0777, true);
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    require_once('connectionclass.php');
    $obj=new connectionclass();
     $rec_id=$_REQUEST['rec_id'];

if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
  $tmpName = $_FILES['file']['tmp_name'];
   $fileName = $_FILES['file']['name'];
  $uploadPath = $uploadDir . $fileName;
    $sql="update recepie set image='$fileName' where rec_id='$rec_id'";
  if (move_uploaded_file($tmpName, $uploadPath)) {
    $response=$obj->Manipulation($sql);
    $response['message']='File uploaded successfully'; 
  } else {
    $response['message']='File upload MOVING failed';
    
  }
} else {
    $response['message']='File upload failed';
   
}

}else{
    $response['message']='METHOD IS NOT POST';
}

echo json_encode($response);