<?php $__env->startSection('content'); ?>

<div class="panel-header bg-primary-gradient text-white bubble-shadow">
    <div class="page-inner p-4 py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <span class="text-white pb-2 text-9">PROFILE </span>
                <dt class="text-white pb-2 text-12"> <?php echo e(ucwords(Auth::user()->name)); ?> </dt>


            </div>
             <div class="ml-md-auto py-2 py-md-0">
                <dt class="text-white op-7 mb-2">Sistem Informasi Sekolah</dt>
                <span class="text-white"></span>
            </div>
        </div>
    </div>
</div>

<div class="page-inner p-4 mt--5">
    <div class="row mt--2">
        <div class="col-md-4 ">
            <div class="card full-height">
                <div class="card-body text-center pt-4 p-2">
                    <div class="avatar avatar-xxl mb-4 pt-2">
                        <img src="<?php echo e(asset('assets/img/blank.png')); ?>" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="card-opening">Welcome <?php echo e(Auth::user()->name); ?></div>

                    <div class="card-pricing mt-3 ml-2">
                        <ul class="specification-list ">
                            <li class="p-1">
                                 <div class="btn-light name-specification text-8 pl-0 p-2">Profile</div>
                            </li>
                            <li class="p-1">
                                <div class="btn-light name-specification text-8 pl-0 p-2">Akun Setting</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title">Pengaturan Akses</div>
                    <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-1"></div>
                            <h6 class="fw-bold mt-3 mb-0">New Users</h6>
                        </div>
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-2"></div>
                            <h6 class="fw-bold mt-3 mb-0">Sales</h6>
                        </div>
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-3"></div>
                            <h6 class="fw-bold mt-3 mb-0">Subscribers</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal" tabindex="-1" role="dialog" id="modalform">
    <div class="modal-dialog modal-65" role="document">
      <div class="modal-content" id="content-modal">

      </div>
    </div>
</div>


<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<script>
    $(function(){
        // swal("Here's the title!", "...and here's the text!","info");
    })


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\new_project\sisfo_me\resources\views/management/profile/index.blade.php ENDPATH**/ ?>