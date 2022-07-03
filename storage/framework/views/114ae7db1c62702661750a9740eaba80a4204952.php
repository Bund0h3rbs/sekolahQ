<?php echo e(Form::open(array('class'=>"form","role"=>"form","id"=>"form-create","novalidate"=>"novalidate"))); ?>

<div class="modal-header pb-2">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="text-center">
        <dt class="text-12">Form Jabatan</dt>
        <span class="text-muted text-8"> Pastikan inputan sesuai dengan ketentuan yang telah di tetapkan</span>
    </div>
    <div class="col-md-12 mt-2">
        <div class="form-group">
            <label>Kode</label>
            <div class="input-group">
            <?php echo e(Form::text('code',$data->code ?? null, array('class'=>'form-control border-br10', 'required','id'=>'code','placeholder'=>'Ex: K1'))); ?>

            </div>
        </div>
        <div class="form-group">
            <label>Nama / Title</label>
            <div class="input-group">
            <?php echo e(Form::text('name',$data->name ?? null, array('class'=>'form-control border-br10', 'required','id'=>'name','placeholder'=>'Kelas 1'))); ?>

            </div>
        </div>

        <div class="form-group">
            <label>Keterangan </label>
            <?php echo e(Form::textarea('description',$data->description ?? null, array('class'=>'form-control border-br10','id'=>'description','placeholder'=>'Pengaturan','rows'=>"5"))); ?>

        </div>
        <div class="form-group row">
            <div class="col-md-8">
                <dt class="text-9">Publish</dt>
                <span class="text-muted text-8">Pilih slide untuk mengaktifkan Tahun Akademik, default menu akan di set draf</span>
            </div>
            <?php
                $checked = null;
                if(isset($data->active) && $data->active == 1){
                    $checked = "checked";
                }
            ?>
            <div class="col-md-4 p-2">
                <label class="switch">
                    <input type="checkbox" name="active" <?php echo e($checked); ?>>
                    <span class="slider round"></span>
                </label>
            <div>
        </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary border-br15" id="btn-proses">
        <i class="fa fa-save"></i>
        Proses Data
    </button>
  </div>
</div>
<?php echo e(Form::hidden('id',$data->id ?? null, array('class'=>'form-control','readonly'))); ?>

<?php echo e(Form::close()); ?>



<script>
$('.select2').select2({
    theme: 'bootstrap4'
});

    $.validator.setDefaults({
        submitHandler: function () {
            saveform();
        }
    });
    $('#form-create').validate({
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.input-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });

    function saveform()
    {
        $.ajax({
        type: "POST",
        url: "<?php echo e(route('jbtn.store')); ?>",
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
            $('#form-create')[0].reset();
                $(".close").trigger('click');
                $('#table_list').DataTable().ajax.reload();
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
    });
    }

</script>
<?php /**PATH D:\xampp\htdocs\new_project\sisfo_me\resources\views/management/jabatan/formcreate.blade.php ENDPATH**/ ?>