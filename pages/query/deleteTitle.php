<?php 
$id = $_POST['id'];
require_once('connect.php');

$sqlCheck = "SELECT title_id FROM titles WHERE title_id = '$id'";
$resultCheck = mysqli_query($conn,$sqlCheck);

if(mysqli_num_rows($resultCheck) == 1){
  $sql = "DELETE FROM `titles` WHERE `title_id` = '$id'";
  if(mysqli_query($conn,$sql)){
    echo json_encode(array("status"=>"true","message"=>"ลบรายการเรียบร้อยแล้ว"),JSON_UNESCAPED_UNICODE);
  }else{
    echo json_encode(array("status"=>"false","message"=>mysqli_error($conn)),JSON_UNESCAPED_UNICODE);
  }
}else{
  echo json_encode(array("status"=>"false","message"=>"ไม่พบรายการ"),JSON_UNESCAPED_UNICODE);
}
mysqli_close($conn);

?>