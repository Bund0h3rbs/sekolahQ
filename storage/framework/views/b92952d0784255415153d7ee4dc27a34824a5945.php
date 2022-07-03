<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SEKOLAH Q</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/icomoon/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">

    <!-- Style -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style-login.css')); ?>">
  </head>
  <body>

  <div class="content" style="padding-top:7rem; padding-bottom:0px">
    <div class="container" >
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="<?php echo e(asset('assets/img/undraw_file_sync_ot38.svg')); ?>" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h4>Portal Administrasi <strong>Sekolah</strong></h4>
              <p class="mb-4">Harap Login dahulu untuk dapat mengakses aplikasi, Pastikan Username dan Password anda telah terdaftar
              </p>
            </div>
            <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger my-4 text-danger" style="font-size:0.9em">
                    <span > Username Dan Password Tidak Valid </span>
                </div>
            <?php endif; ?>
            <form method="POST" name="form-login" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
              <div class="form-group first">
                <label for="username">Username</label>
                <input class="form-control"  type="email" name="email" id='email' required >

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" required id="password" name="password">
              </div>

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
              </div>

              <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">
            </form>


              <span class="d-block text-left my-4 text-muted"> or sign in with</span>

              <div class="social-login text-center">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span>
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span>
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span>
                </a>
              </div>

            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

    <script src="<?php echo e(asset('assets/js/jquery.3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

 </body>
</html>
<?php /**PATH D:\xampp\htdocs\viehs\sisfo_me\resources\views/auth/login-sisfo.blade.php ENDPATH**/ ?>