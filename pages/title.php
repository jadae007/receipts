<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>income-expense KNH</title>
  <?php require_once('jsAndCSS.php'); ?>
</head>
<body>
  <?php require_once('components/navbar.php'); ?>
  <div class="container-fulid">
    <input type="hidden" name="no" id="no" value="<?php echo $_GET['no']; ?>">
    <div class="row">
      <h1 class="m-3" id="titleName"></h1>
      <span class="m-4">
        <button class="btn btn-success">เพิ่มรายการ</button>
      </span>
     

      <div class="col-1"></div>
      <div class="col-10">
      <table id="table" class="table table-bordered">
        <thead>
          <tr>
            <th></th>
            <th>รายการ</th>
            <th>แผน</th>
            <th>ตค.</th>
            <th>พย.</th>
            <th>ธค.</th>
            <th>มค.</th>
            <th>กพ.</th>
            <th>มีค.</th>
            <th>เมย.</th>
            <th>พค.</th>
            <th>มิย.</th>
            <th>กค.</th>
            <th>สค.</th>
            <th>กย.</th>
            <th>รวม</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="tbody">
        </tbody>
      </table>
      </div>
      <div class="col-1"></div>
    </div>
  </div>
  <script src="ajax/title.js"></script>
</body>
</html>