<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SEKOLAH Q</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" href="<?php echo e(asset('assets/img/icon.ico')); ?>" type="image/x-icon"/>

	<link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/atlantis.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/style-me.css')); ?>">
  </head>
  <body style="background-color:#48ABF7 !important;background: linear-gradient(-45deg, #0A5A97, #48ABF7) !important;">
    <div class="wrapper">
        <div class="content">
            <div class="wrapper bg-info-gradient text-white bubble-shadow">
                    <div style="margin-top:10%" >
                        <div class="text-center">
                            <dt style="font-size:10rem"><?php echo $__env->yieldContent('code'); ?></dt>
                            <span style="font-size:3rem"><?php echo $__env->yieldContent('message'); ?></span>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    </body>
</html>
<?php /**PATH D:\xampp\htdocs\pribadi_plen\sisfo_me\resources\views/errors/minimal.blade.php ENDPATH**/ ?>