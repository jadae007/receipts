<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <?php 
  require('jsAndCSS.php');
  ?>
</head>
<body>
  <style>
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
  </style>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="../assets/images/bg1.jpg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form id="loginForm" method="POST" enctype="multipart/form-data">
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Login</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="form3Example3" id="username" name="username" class="form-control form-control-lg"
              placeholder="Username" required />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="password" name="password" class="form-control form-control-lg"
              placeholder="password" required/>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="1" id="remember" name="remember" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <!-- <a href="#!" class="text-body">Forgot password?</a> -->
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p> -->
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
<script src="ajax/index.js"></script>
</body>


</html>