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
  <div class="container">
    <div class="row mt-5">
      <input type="hidden" name="year" id="year" value="<?php  echo ($_GET['year']) ? $_GET['year'] : date("Y")+543;  ?>">
      <div class="col">
        <button type="button" class="btn btn-success" id="openModal" data-bs-toggle="modal" data-bs-target="#addTitle">
          เพิ่มรายการ
        </button>
      </div>
    </div>
    <div class="row mt-5" id="titleMenu">

    </div>
  </div>
  <script src="ajax/income.js"></script>
</body>

<!-- Modal -->
<div class="modal fade" id="addTitle" tabindex="-1" aria-labelledby="addTitleLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form enctype="multipart/form-data" id="formAddTitle">
        <div class="modal-header">
          <h5 class="modal-title" id="addTitleLabel">เพิ่มรายการ</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="col-3">
            <label for="year" class="form-label">ปี</label>
            <input type="text" class="form-control" id="year" name="year" minlength="4" maxlength="4" required>
          </div>
          <div class="col-3">
            <label for="no" class="form-label">ลำดับ</label>
            <input type="text" class="form-control" id="no" name="no" minlength="1" maxlength="5" required>
          </div>
          <div class="col-12">
            <label for="titleName" class="form-label">รายการ</label>
            <input type="text" class="form-control" id="titleName" name="titleName" minlength="1" maxlength="200" required>
          </div>
          <div class="col-12">
            <label for="amnout" class="form-label">งบประมาณ</label>
            <input type="text" class="form-control" id="amount" name="amount" minlength="1" maxlength="10" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

</html>