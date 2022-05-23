<?php 
$year = $_GET['year'];
require_once('connect.php');

$sql = "SELECT * FROM titles WHERE `year` = '$year' ";
$result = mysqli_query($conn,$sql);
mysqli_num_rows($result) > 0 ? $rows['titleObj'] = mysqli_fetch_all($result,MYSQLI_ASSOC) : $rows['titleObj'] = null;
print json_encode($rows,JSON_UNESCAPED_UNICODE);
mysqli_close($conn);

?>