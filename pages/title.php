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
    <input type="hidden" name="no" id="no" value="<?php echo $_GET['no']; ?>">
    <div class="row">
      <h1><?php echo $_GET['no']; ?></h1>
    </div>
  </div>
  <script src="ajax/title.js"></script>
</body>
</html>