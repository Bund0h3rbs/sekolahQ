<?php echo e(Form::open(array('class'=>"form","role"=>"form","id"=>"form-create","novalidate"=>"novalidate"))); ?>

<?php echo e(Form::hidden('menu_id',$data->id ?? null)); ?>

<div class="card">
  <div class="card-header">
      <div class="card-head-row">
          <div class="card-title">
              <dt>Akses Menu</dt>
              <div class="text-muted mt-0" style="font-size:0.9rem">Akses Aplikasi Sistem</div>
          </div>
          <div class="card-tools">
              <div class="btn btn-outline-primary border-br15" id="back_data">
                  <span class="btn-label">
                      <i class="fas fa-angle-double-left"></i>
                  </span>
                  Kembali
              </div>
          </div>
      </div>
      <div class="card-body">
        <div class="col-md-12 row">

        </div>
        <div class="col-md-12 row">
            <label class="control-label col-md-3">Nama Menu</label>
            <label class="control-label">:</label>
            <label class="control-label col-md-6"> <?php echo e($data->name ?? null); ?></label>
        </div>
        <div class="col-md-12 row">
            <label class="control-label col-md-3">Status Menu</label>
            <label class="control-label">:</label>
            <label class="control-label col-md-6">
                <?php if($data->active == 1): ?>
                <span class="badge badge-primary p-2"> Publish</span>
                <?php else: ?>
                <span class="badge badge-danger p-2"> Draf</span>
                <?php endif; ?>

            </label>
        </div>
        <div class="col-md-12 row">
            <label class="control-label col-md-3">Keterangan Menu</label>
            <label class="control-label">:</label>
            <label class="control-label col-md-6"> <?php echo e($data->description ?? '-'); ?></label>
        </div>
        <div class="row pt-5">
            <table class="table table-bordered table-striped" >
                <thead>
                    <tr class="bg-primary text-white">
                        <th width="20px">No</th>
                        <th width="120px">
                            <div class="row">
                                <label class="checkcostume">
                                    <input type="checkbox" name="group_cek" id=group_cek>
                                    <span class="checkmark" style="left:0"></span>
                                </label>
                                <label class="text-white">Cek ALL </label>
                            </div>
                        </th>
                        <th>Nama Akses</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                <?php $__currentLoopData = $menuAkses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $akses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $checked_menu = null;
                    if($menuRole[$key]){
                        $checked_menu = 'checked';
                    }
                ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td class="text-center">
                            <div class="row">
                                <label class="checkcostume">
                                    <input type="checkbox" class="select_row" name="select_cek[]" <?php echo e($checked_menu); ?> value="<?php echo e($key); ?>" id=select_cek>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </td>
                        <td><?php echo e($akses); ?></td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
      </div>
      <div class="card-footer float-right">
        <button type="button" class="btn btn-primary border-br15" id="btn-proses">
            <i class="fa fa-save"></i>
            Proses Data
        </button>
      </div>
  </div>

</div>

<?php echo e(Form::close()); ?>

<script>
$('#back_data').click(function(){
    $('#form-default').show();
    $('#form-akses').html('');
    $('.table').DataTable().ajax.reload();
})

$('#group_cek').click(function(){
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var checkbox of checkboxes) {
        checkbox.checked = this.checked;
    }
})

$('#btn-proses').click(function(){
    if($('input[name="select_cek[]"]:checked').length > 0){
        $.ajax({
            type: "POST",
            url: "<?php echo e(route('menus.storeakses')); ?>",
            data: $("#form-create").serialize(), // serializes the form's elements.
            beforeSend: function () {
                // $('#form_create').append('<div class="loader "><div class="loading"></div></div>');
            },
            success: function(data)
            {
                // $('.loader').remove();
                data = jQuery.parseJSON(data);
                if(data.success == true)
                {
                    $('#back_data').trigger('click');
                }
            }, error: function (xhr, ajaxOptions, thrownError) {
                swal({
                    title:"Informasi!",
                    text: "Terdapat Kesalahan Data, Pastikan Pengisian Telah Benar",
                    icon: "warning",
                    buttons: false,
                    timer: 1000,
                });
            }
        })
    }else{
        swal({
            title:"",
            text: "Tidak Ada Data Yang Dipilih",
            icon: "info",
            buttons: false,
            timer: 1000,
        });
    }
})
</script>
<?php /**PATH D:\xampp\htdocs\new_project\sisfo_me\resources\views/management/menus/formMenuAkses.blade.php ENDPATH**/ ?>