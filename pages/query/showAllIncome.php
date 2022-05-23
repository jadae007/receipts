<?php 
($_GET['year']) ? $year = $_GET['year'] : $year = date('Y')+543;
require('connect.php');
$sql = "SELECT * FROM titles t 
LEFT JOIN list l ON  l.titleId = t.title_id
LEFT JOIN detail d ON d.listId = l.list_id 
WHERE t.year = '$year'
ORDER BY t.no, l.listName,d.detailName ";

$result = mysqli_query($conn,$sql);
mysqli_num_rows($result)>0 ? $rows["allIncomeObj"] = mysqli_fetch_all($result,MYSQLI_ASSOC):$rows["allIncomeObj"] = null;
print json_encode($rows,JSON_UNESCAPED_UNICODE);
mysqli_close($conn)
?>