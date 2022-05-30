<?php
$titleId = $_POST['titleId'];
$listName = $_POST['listName'];
(isset($_POST['listAmountMonth10']) && !empty($_POST['listAmountMonth10'])) ? $listAmountMonth10 = trim($_POST['listAmountMonth10']) : $listAmountMonth10 = NULL;
(isset($_POST['listAmountMonth11']) && !empty($_POST['listAmountMonth11'])) ? $listAmountMonth11 = trim($_POST['listAmountMonth11']) : $listAmountMonth11 = NULL;
(isset($_POST['listAmountMonth12']) && !empty($_POST['listAmountMonth12'])) ? $listAmountMonth12 = trim($_POST['listAmountMonth12']) : $listAmountMonth12 = NULL;
(isset($_POST['listAmountMonth1']) && !empty($_POST['listAmountMonth1']) ) ? $listAmountMonth1 = trim($_POST['listAmountMonth1']) : $listAmountMonth1 = NULL;
(isset($_POST['listAmountMonth2']) && !empty($_POST['listAmountMonth2']) ) ? $listAmountMonth2 = trim($_POST['listAmountMonth2']) : $listAmountMonth2 = NULL;
(isset($_POST['listAmountMonth3']) && !empty($_POST['listAmountMonth3']) ) ? $listAmountMonth3 = trim($_POST['listAmountMonth3']) : $listAmountMonth3 = NULL;
(isset($_POST['listAmountMonth4']) && !empty($_POST['listAmountMonth4']) ) ? $listAmountMonth4 = trim($_POST['listAmountMonth4']) : $listAmountMonth4 = NULL;
(isset($_POST['listAmountMonth5']) && !empty($_POST['listAmountMonth5']) ) ? $listAmountMonth5 = trim($_POST['listAmountMonth5']) : $listAmountMonth5 = NULL;
(isset($_POST['listAmountMonth6']) && !empty($_POST['listAmountMonth6']) ) ? $listAmountMonth6 = trim($_POST['listAmountMonth6']) : $listAmountMonth6 = NULL;
(isset($_POST['listAmountMonth7']) && !empty($_POST['listAmountMonth7']) ) ? $listAmountMonth7 = trim($_POST['listAmountMonth7']) : $listAmountMonth7 = NULL;
(isset($_POST['listAmountMonth8']) && !empty($_POST['listAmountMonth8']) ) ? $listAmountMonth8 = trim($_POST['listAmountMonth8']) : $listAmountMonth8 = NULL;
(isset($_POST['listAmountMonth9']) && !empty($_POST['listAmountMonth9']) ) ? $listAmountMonth9 = trim($_POST['listAmountMonth9']) : $listAmountMonth9 = NULL;


require('connect.php');

$sql = "INSERT INTO
`list`(
    `titleId`,
    `listName`,
    listAmountMonth10,
    listAmountMonth11,
    listAmountMonth12,
    listAmountMonth1,
    listAmountMonth2,
    listAmountMonth3,
    listAmountMonth4,
    listAmountMonth5,
    listAmountMonth6,
    listAmountMonth7,
    listAmountMonth8,
    listAmountMonth9
)
VALUES (
    '$titleId',
    '$listName',
    '$listAmountMonth10',
    '$listAmountMonth11',
    '$listAmountMonth12',
    '$listAmountMonth1',
    '$listAmountMonth2',
    '$listAmountMonth3',
    '$listAmountMonth4',
    '$listAmountMonth5',
    '$listAmountMonth6',
    '$listAmountMonth7',
    '$listAmountMonth8',
    '$listAmountMonth9'
)";


if(mysqli_query($conn,$sql)){
  echo json_encode(array("status"=>"true","message"=>"เพิ่มรายการเรียบร้อยแล้ว"),JSON_UNESCAPED_UNICODE);
}else{
  echo json_encode(array("status"=>"false","message"=>mysqli_error($conn)),JSON_UNESCAPED_UNICODE);
}

mysqli_close($conn);
?>