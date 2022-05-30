<?php 
$no = $_GET['no'];
require_once('connect.php');

$sql = "SELECT * FROM titles t LEFT JOIN `list` l ON t.title_id = l.titleId LEFT JOIN detail d ON d.listId = l.list_id  WHERE t.no = '$no'";
$result = mysqli_query($conn,$sql);
mysqli_num_rows($result) > 0 ? $rows['listIntitleObj'] = mysqli_fetch_all($result,MYSQLI_ASSOC) : $rows['listIntitleObj'] = null;
print json_encode($rows,JSON_UNESCAPED_UNICODE);
mysqli_close($conn);
?>