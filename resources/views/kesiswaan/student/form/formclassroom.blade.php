<div class="card-title mb-3">
    <dt>Management Kelas</dt>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">NIS</label>
    <div class="col-md-8 input-group">
        {{ Form::text('nis',$data->nis ?? null, array('class'=>'form-control border-br10','required','id'=>'name','placeholder'=>'nama Ayah'))}}
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Kelas Terdaftar</label>
    <div class="col-md-8 input-group">
        {{ Form::select('kelas_id',[''=>'-- Pilih --']+$kelas, null, array('class'=>'form-control select2 border-br10',
        'required','id'=>'kelas_id'))}}
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Tahun Ajaran</label>
    <div class="col-md-8 input-group">
        {{ Form::select('academic_year_id',[''=>'-- Pilih --']+$academic_year, null, array('class'=>'form-control select2 border-br10','required', 'id'=>'academic_year_id'))}}
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Keterangan</label>
    <div class="input-group col-md-8">
        {{ Form::textarea('description',$data->description ?? null, array('class'=>'form-control border-br10','id'=>'description','placeholder'=>'Jln','rows'=>"5"))}}
    </div>
  </div>

<div class="card-body ">
    <div class="btn btn-outline-primary border-br15 btn-me" id="btn-wali-back">
        <i class="fas fa-angle-double-left"></i> Kembali</div>
    <button type="submit" class="btn btn-outline-primary border-br15 btn-me float-right" id="btn-simpan"> Simpan Data
        <i class="fas fa-angle-double-right"></i>
    </button>
  </div>


<script>
    $('#btn-wali-back').click(function(){
        $('#tab-ortuwali').trigger('click');
    });
</script>
