<?php 
require_once('connect.php');
$no = trim($_POST['no']);
$year = trim($_POST['year']);
$titleName = trim($_POST['titleName']);
$amount = trim($_POST['amount']);

$sql = "INSERT INTO `titles`(`no`, `titleName`, `amount`, `year`) VALUES ('$no','$titleName','$amount','$year')";
if(mysqli_query($conn,$sql)){
  echo json_encode(array("status"=>"true","message"=>"บันทึกข้อมูลเรียบร้อยแล้ว"),JSON_UNESCAPED_UNICODE);
}else{
  echo json_encode(array("status"=>"true","message"=>mysqli_error($conn)),JSON_UNESCAPED_UNICODE);
}

mysqli_close($conn);

?>