<?php $__env->startSection('content'); ?>

<div class="panel-header bg-primary-gradient text-white bubble-shadow">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <span class="text-white pb-2 text-9">Aktifitas </span>
                <dt class="text-white pb-2 text-12"> <?php echo e(ucwords(Auth::user()->name)); ?> </dt>


            </div>
             <div class="ml-md-auto py-2 py-md-0">
                <dt class="text-white op-7 mb-2">Sistem Informasi Sekolah</dt>
                <span class="text-white"></span>
            </div>
        </div>
    </div>
</div>

<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <i class="fas fa-exclamation-triangle text-danger mt-3 mb-3" style="font-size:7rem"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="alert alert-danger text-8">
                                <div class=" ml-2">
                                    <h4 class="text-bold">INFORMASI</h4>
                                    <hr/>
                                    <dd>Untuk sementara , menu tidak dapat di akses</dd>
                                    <dd>fungsi menu dalam tahap pengembangan</dd>
                                    <dt class="mt-3">TERIMA KASIH !!</dt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\new_project\sisfo_me\resources\views/management/activity/index.blade.php ENDPATH**/ ?>