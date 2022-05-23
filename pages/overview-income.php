<?php
$fullYear = ($_GET['year']) ? $_GET['year'] : date("Y") + 543;
$year = substr($fullYear, -2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once('jsAndCSS.php'); ?>
  <title>Hello</title>
</head>

<body>
  <?php require_once('components/navbar.php'); ?>
  <div class="container-fluid">
    <input type="hidden" name="year" id="year" value="<?php echo ($_GET['year']) ? $_GET['year'] : date("Y") + 543;  ?>">
    <div class="row p-5" style="align-items:center">
      <!-- <div style="height:700px;overflow: scroll;"> -->
      <table id="table" class="table table-bordered">
        <thead>
          <tr>
            <th></th>
            <th>ลำดับ</th>
            <th>รายการ</th>
            <th>แผน <?php echo $fullYear; ?></th>
            <th>ตค.-<?php echo $year - 1; ?></th>
            <th>พย.-<?php echo $year - 1; ?></th>
            <th>ธค.-<?php echo $year - 1; ?></th>
            <th>มค.-<?php echo $year; ?></th>
            <th>กพ.-<?php echo $year; ?></th>
            <th>มีค.-<?php echo $year; ?></th>
            <th>เมย.-<?php echo $year; ?></th>
            <th>พค.-<?php echo $year; ?></th>
            <th>มิย.-<?php echo $year; ?></th>
            <th>กค.-<?php echo $year; ?></th>
            <th>สค.-<?php echo $year; ?></th>
            <th>กย.-<?php echo $year; ?></th>
            <th>รวม</th>
            <th>ส่วนต่าง</th>
          </tr>
        </thead>
        <tbody id="tbody">
        </tbody>
      </table>
      <!-- </div> -->
    </div>
  </div>
  <script src="ajax/overview-income.js"></script>
</body>

</html>