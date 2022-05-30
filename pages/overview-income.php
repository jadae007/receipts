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
    <div class="row mt-3">
      <div class="col">
        <button type="button" class="btn btn-success" id="openModal" data-bs-toggle="modal" data-bs-target="#addTitle">
          เพิ่มรายการ
        </button>
      </div>
      <div class="col-2">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="inputYear" value="<?php echo ($_GET['year']) ? $_GET['year'] : date("Y") + 543; ?>" aria-describedby="button-addon2">
          <button class="btn btn-outline-secondary" type="button" id="btnChangeYear">เปลี่ยนปี</button>
        </div>
      </div>
      <div class="col"></div>
    </div>
    <div class="row p-5">
      <div class="col-12">
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
              <th>action</th>
            </tr>
          </thead>
          <tbody id="tbody">
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="ajax/overview-income.js"></script>
</body>

<!-- Modal add title -->
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

<!-- Modal add list -->
<div class="modal fade" id="addListModal" tabindex="-1" aria-labelledby="addListModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form enctype="multipart/form-data" id="formAddList">
        <div class="modal-header">
          <h5 class="modal-title" id="addListModalLabel">เพิ่มรายการย่อย </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="titleId" id="titleId">
          <div class="row">
            <div class="mb-3">
              <label for="listName" class="form-label">รายการ</label>
              <input type="text" class="form-control" id="listName" name="listName" required>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="listAmountMonth10" class="form-label">เดือน ต.ค.</label>
                <input type="text" class="form-control" id="listAmountMonth10" name="listAmountMonth10">
              </div>
              <div class="mb-3">
                <label for="listAmountMonth11" class="form-label">เดือน พ.ย.</label>
                <input type="text" class="form-control" id="listAmountMonth11" name="listAmountMonth11">
              </div>
              <div class="mb-3">
                <label for="listAmountMonth12" class="form-label">เดือน ธ.ค.</label>
                <input type="text" class="form-control" id="listAmountMonth12" name="listAmountMonth12">
              </div>
              <div class="mb-3">
                <label for="listAmountMonth1" class="form-label">เดือน ม.ค.</label>
                <input type="text" class="form-control" id="listAmountMonth1" name="listAmountMonth1">
              </div>
              <div class="mb-3">
                <label for="listAmountMonth2" class="form-label">เดือน ก.พ.</label>
                <input type="text" class="form-control" id="listAmountMonth2" name="listAmountMonth2">
              </div>
              <div class="mb-3">
                <label for="listAmountMonth3" class="form-label">เดือน มี.ค.</label>
                <input type="text" class="form-control" id="listAmountMonth3" name="listAmountMonth3">
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="listAmountMonth4" class="form-label">เดือน เม.ย.</label>
                <input type="text" class="form-control" id="listAmountMonth4" name="listAmountMonth4">
              </div>
              <div class="mb-3">
                <label for="listAmountMonth5" class="form-label">เดือน พ.ค.</label>
                <input type="text" class="form-control" id="listAmountMonth5" name="listAmountMonth5">
              </div>
              <div class="mb-3">
                <label for="listAmountMonth6" class="form-label">เดือน มิ.ย.</label>
                <input type="text" class="form-control" id="listAmountMonth6" name="listAmountMonth6">
              </div>
              <div class="mb-3">
                <label for="listAmountMonth7" class="form-label">เดือน ก.ค.</label>
                <input type="text" class="form-control" id="listAmountMonth7" name="listAmountMonth7">
              </div>
              <div class="mb-3">
                <label for="listAmountMonth8" class="form-label">เดือน ส.ค.</label>
                <input type="text" class="form-control" id="listAmountMonth8" name="listAmountMonth8">
              </div>
              <div class="mb-3">
                <label for="listAmountMonth9" class="form-label">เดือน ก.ย.</label>
                <input type="text" class="form-control" id="listAmountMonth9" name="listAmountMonth9">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal add detail -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form enctype="multipart/form-data" id="formAddDetail">
        <div class="modal-header">
          <h5 class="modal-title" id="detailModalLabel">เพิ่มรายละเอียดรายการ </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="listId" id="listId">
          <div class="row">
            <div class="mb-3">
              <label for="detailName" class="form-label">รายการ</label>
              <input type="text" class="form-control" id="detailName" name="detailName" required>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="detailAmountMonth10" class="form-label">เดือน ต.ค.</label>
                <input type="text" class="form-control" id="detailAmountMonth10" name="detailAmountMonth10">
              </div>
              <div class="mb-3">
                <label for="detailAmountMonth11" class="form-label">เดือน พ.ย.</label>
                <input type="text" class="form-control" id="detailAmountMonth11" name="detailAmountMonth11">
              </div>
              <div class="mb-3">
                <label for="detailAmountMonth12" class="form-label">เดือน ธ.ค.</label>
                <input type="text" class="form-control" id="detailAmountMonth12" name="detailAmountMonth12">
              </div>
              <div class="mb-3">
                <label for="detailAmountMonth1" class="form-label">เดือน ม.ค.</label>
                <input type="text" class="form-control" id="detailAmountMonth1" name="detailAmountMonth1">
              </div>
              <div class="mb-3">
                <label for="detailAmountMonth2" class="form-label">เดือน ก.พ.</label>
                <input type="text" class="form-control" id="detailAmountMonth2" name="detailAmountMonth2">
              </div>
              <div class="mb-3">
                <label for="detailAmountMonth3" class="form-label">เดือน มี.ค.</label>
                <input type="text" class="form-control" id="detailAmountMonth3" name="detailAmountMonth3">
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="detailAmountMonth4" class="form-label">เดือน เม.ย.</label>
                <input type="text" class="form-control" id="detailAmountMonth4" name="detailAmountMonth4">
              </div>
              <div class="mb-3">
                <label for="detailAmountMonth5" class="form-label">เดือน พ.ค.</label>
                <input type="text" class="form-control" id="detailAmountMonth5" name="detailAmountMonth5">
              </div>
              <div class="mb-3">
                <label for="detailAmountMonth6" class="form-label">เดือน มิ.ย.</label>
                <input type="text" class="form-control" id="detailAmountMonth6" name="detailAmountMonth6">
              </div>
              <div class="mb-3">
                <label for="detailAmountMonth7" class="form-label">เดือน ก.ค.</label>
                <input type="text" class="form-control" id="detailAmountMonth7" name="detailAmountMonth7">
              </div>
              <div class="mb-3">
                <label for="detailAmountMonth8" class="form-label">เดือน ส.ค.</label>
                <input type="text" class="form-control" id="detailAmountMonth8" name="detailAmountMonth8">
              </div>
              <div class="mb-3">
                <label for="detailAmountMonth9" class="form-label">เดือน ก.ย.</label>
                <input type="text" class="form-control" id="detailAmountMonth9" name="detailAmountMonth9">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
      </form>
    </div>
  </div>
</div>

</html>