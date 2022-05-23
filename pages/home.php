<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>รายรับ งานแผน KNH</title>
  <?php require_once('jsAndCSS.php'); ?>
</head>
<body>
  <?php require_once('components/navbar.php'); ?>
  <div class="container">
  <div class="row mt-5">
  <div class="col-sm-6">
    <div class="card" style="cursor: pointer;" onclick='window.location.href="income"'>
      <div class="card-body">
        <h5 class="card-title">รายรับ</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card" style="cursor: pointer;" onclick='window.location.href="expense"'>
      <div class="card-body">
        <h5 class="card-title">รายจ่าย</h5>
      </div>
    </div>
  </div>
</div>
  </div>
</body>
</html>