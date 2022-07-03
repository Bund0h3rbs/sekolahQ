<?php $__env->startSection('content'); ?>

<style>

</style>
<div class="page-inner">
    <div class="col-md-12">
        <div class="panel-header row">
            <h4 class="page-title"><?php echo e($title ?? 'Aplikasi Sekolah'); ?></h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('home')); ?>">Home</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Menu</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row pt-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">
                            <dt>Daftar List</dt>
                            <div class="text-muted mt-0" style="font-size:0.9rem">Menu Aplikasi Sistem</div>
                        </div>

                        <div class="card-tools">
                            <div class="btn btn-info btn-border btn-block border-br15 p-2 mr-4" id="add_data">
                                <span class="btn-label">
                                    <i class="flaticon-plus"></i>
                                </span>
                                Add Data
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="table table-bordered table-hover" >
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th style="min-width:100px">#</th>
                                    <th>Icon</th>
                                    <th>Nama</th>
                                    <th>Parent</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="modalform">
    <div class="modal-dialog modal-65" role="document">
      <div class="modal-content" id="content-modal">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<script>
    $('#basic-datatables').DataTable();

    $(function(){
        // swal("Here's the title!", "...and here's the text!","info");
    })

    $('#add_data').click(function(){
        $.ajax({
            type:"POST",
            url: "<?php echo e(route('menus.create')); ?>",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                },
            beforeSend: function() {
                $('#container').append('<div class="loader"><img src="<?php echo e(asset("assets/images/preloader_2.gif")); ?>" /></div>');
            },
            success: function (e) {
               $('#modalform').modal('show');
               $('#content-modal').html(e);
            }
        });
    })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\viehs\sisfo_me\resources\views/management/menus/index.blade.php ENDPATH**/ ?>