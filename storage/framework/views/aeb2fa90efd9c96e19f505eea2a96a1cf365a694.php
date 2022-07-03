<div class="modal-header pb-2">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="text-center">
        <dt class="text-12">Form Menu Sistem</dt>
        <span class="text-muted text-8"> Pastikan inputan sesuai dengan ketentuan yang telah di tetapkan</span>
    </div>
    <div class="col-md-12 mt-2">
        <div class="form-group">
            <label>Nama Menu / Title</label>
            <?php echo e(Form::text('name',$data->menu ?? null, array('class'=>'form-control border-br10','id'=>'name','placeholder'=>'Pengaturan'))); ?>

        </div>
        <div class="form-group row">
            <div class="col-md-8">
                <label>Parent</label>
                <?php echo e(Form::text('name',$data->menu ?? null, array('class'=>'form-control border-br10','id'=>'name','placeholder'=>'Pengaturan'))); ?>

                <span class="text-muted text-8">Jika menu memiliki induk</span>
            </div>
            <div class="col-md-4">
                <label>Urutan</label>
                <?php echo e(Form::number('no_urut',$data->menu ?? null, array('class'=>'form-control border-br10','id'=>'name','placeholder'=>'1'))); ?>

            </div>
            <div class="form-group">
                <label>Link / Route</label>
                <?php echo e(Form::text('name',$data->menu ?? null, array('class'=>'form-control border-br10','id'=>'name','placeholder'=>'Pengaturan'))); ?>

                <span class="text-muted text-8">referensi akses route menu</span>
            </div>
            <div class="form-group">
                <label>Icon </label>
                <?php echo e(Form::text('name',$data->menu ?? null, array('class'=>'form-control border-br10','id'=>'name','placeholder'=>'Pengaturan'))); ?>

                <span class="text-muted text-8">suport icon fontawesome & flaticon</span>
            </div>
            <div class="form-group">
                <label>Keterangan </label>
                <?php echo e(Form::textarea('name',$data->menu ?? null, array('class'=>'form-control border-br10','id'=>'name','placeholder'=>'Pengaturan','rows'=>"5"))); ?>

            </div>
            <div class="form-group">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                  </div>
            </div>
        </div>

    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-primary border-br15" id="btn-proses">
        <i class="fa fa-save"></i>
        Proses Data
    </button>
  </div>
</div>
<?php /**PATH D:\xampp\htdocs\viehs\sisfo_me\resources\views/management/menus/formcreate.blade.php ENDPATH**/ ?>