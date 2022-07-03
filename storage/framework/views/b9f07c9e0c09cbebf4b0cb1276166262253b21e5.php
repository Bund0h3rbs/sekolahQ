<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SEKOLAH Q</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?php echo e(asset('assets/img/icon.ico')); ?>" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?php echo e(asset('assets/js/webfont/webfont.min.js')); ?>"></script>
	<script>
		WebFont.load({
			// google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?php echo e(asset("assets/css/fonts.min.css")); ?>']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});

	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/atlantis.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/style-me.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/select2/css/select2.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/select2/css/select2-bootstrap4.css')); ?>">

    <script src="<?php echo e(asset('assets/js/jquery.3.2.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>

	<script src="<?php echo e(asset('assets/js/jquery-ui.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jquery.scrollbar.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/bootstrap-notify.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/atlantis.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatables.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/sweetalert.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.validate.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/select2/js/select2.full.min.js')); ?>"></script>
</head>

<body  data-background-color="bg3">
    <div class="wrapper">
        <?php echo $__env->make('template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('template.menus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="main-panel">
			<div class="content">

                <?php echo $__env->yieldContent('content'); ?>

                <footer class="footer mt-3" >
                    <div class="container-fluid">
                        <nav class="pull-left">
                           <span class="text-primary">
                            Sistem Informasi Sekolah
                           </span>
                        </nav>
                        <div class="copyright ml-auto">
                            2022, Design & Development by <a href="#">VIEHS</a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

</body>
</html>
<?php /**PATH D:\xampp\htdocs\pribadi_plen\sisfo_me\resources\views/template/template.blade.php ENDPATH**/ ?>