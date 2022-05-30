<?php
$listId = $_POST['listId'];
$detailName = $_POST['detailName'];
(isset($_POST['detailAmountMonth10']) && !empty($_POST['detailAmountMonth10'])) ? $detailAmountMonth10 = trim($_POST['detailAmountMonth10']) : $detailAmountMonth10 = NULL;
(isset($_POST['detailAmountMonth11']) && !empty($_POST['detailAmountMonth11'])) ? $detailAmountMonth11 = trim($_POST['detailAmountMonth11']) : $detailAmountMonth11 = NULL;
(isset($_POST['detailAmountMonth12']) && !empty($_POST['detailAmountMonth12'])) ? $detailAmountMonth12 = trim($_POST['detailAmountMonth12']) : $detailAmountMonth12 = NULL;
(isset($_POST['detailAmountMonth1']) && !empty($_POST['detailAmountMonth1']) ) ? $detailAmountMonth1 = trim($_POST['detailAmountMonth1']) : $detailAmountMonth1 = NULL;
(isset($_POST['detailAmountMonth2']) && !empty($_POST['detailAmountMonth2']) ) ? $detailAmountMonth2 = trim($_POST['detailAmountMonth2']) : $detailAmountMonth2 = NULL;
(isset($_POST['detailAmountMonth3']) && !empty($_POST['detailAmountMonth3']) ) ? $detailAmountMonth3 = trim($_POST['detailAmountMonth3']) : $detailAmountMonth3 = NULL;
(isset($_POST['detailAmountMonth4']) && !empty($_POST['detailAmountMonth4']) ) ? $detailAmountMonth4 = trim($_POST['detailAmountMonth4']) : $detailAmountMonth4 = NULL;
(isset($_POST['detailAmountMonth5']) && !empty($_POST['detailAmountMonth5']) ) ? $detailAmountMonth5 = trim($_POST['detailAmountMonth5']) : $detailAmountMonth5 = NULL;
(isset($_POST['detailAmountMonth6']) && !empty($_POST['detailAmountMonth6']) ) ? $detailAmountMonth6 = trim($_POST['detailAmountMonth6']) : $detailAmountMonth6 = NULL;
(isset($_POST['detailAmountMonth7']) && !empty($_POST['detailAmountMonth7']) ) ? $detailAmountMonth7 = trim($_POST['detailAmountMonth7']) : $detailAmountMonth7 = NULL;
(isset($_POST['detailAmountMonth8']) && !empty($_POST['detailAmountMonth8']) ) ? $detailAmountMonth8 = trim($_POST['detailAmountMonth8']) : $detailAmountMonth8 = NULL;
(isset($_POST['detailAmountMonth9']) && !empty($_POST['detailAmountMonth9']) ) ? $detailAmountMonth9 = trim($_POST['detailAmountMonth9']) : $detailAmountMonth9 = NULL;


require('connect.php');

$sql = "INSERT INTO
`detail`(
    `listId`,
    `detailName`,
    detailAmountMonth10,
    detailAmountMonth11,
    detailAmountMonth12,
    detailAmountMonth1,
    detailAmountMonth2,
    detailAmountMonth3,
    detailAmountMonth4,
    detailAmountMonth5,
    detailAmountMonth6,
    detailAmountMonth7,
    detailAmountMonth8,
    detailAmountMonth9
)
VALUES (
    '$listId',
    '$detailName',
    '$detailAmountMonth10',
    '$detailAmountMonth11',
    '$detailAmountMonth12',
    '$detailAmountMonth1',
    '$detailAmountMonth2',
    '$detailAmountMonth3',
    '$detailAmountMonth4',
    '$detailAmountMonth5',
    '$detailAmountMonth6',
    '$detailAmountMonth7',
    '$detailAmountMonth8',
    '$detailAmountMonth9'
)";

echo $sql ;

// if(mysqli_query($conn,$sql)){
//   echo json_encode(array("status"=>"true","message"=>"เพิ่มรายการเรียบร้อยแล้ว"),JSON_UNESCAPED_UNICODE);
// }else{
//   echo json_encode(array("status"=>"false","message"=>mysqli_error($conn)),JSON_UNESCAPED_UNICODE);
// }

// mysqli_close($conn);

?>