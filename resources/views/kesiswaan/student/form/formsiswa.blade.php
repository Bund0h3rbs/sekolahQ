<div class="card-title">
    <dt>Form Data Siswa</dt>
</div>
  <div class="form-group row">
    <label class="control-label col-md-3">Nama</label>
    <div class="col-md-6 input-group">
        {{ Form::text('name',$data->code ?? null, array('class'=>'form-control border-br10', 'required','id'=>'name','placeholder'=>'nama llengkap'))}}
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-md-3">Tempat Lahir</label>
    <div class="col-md-4 input-group">
        {{ Form::text('birth_place',$data->code ?? null, array('class'=>'form-control border-br10', 'required','id'=>'code','placeholder'=>'tempat lahir'))}}
    </div>
    <label class="control-label col-md-2">Tgl Lahir</label>
    <div class="col-md-3 input-group">
        {{ Form::date('birth_date',$data->code ?? null, array('class'=>'form-control border-br10', 'required','id'=>'birth_date'))}}
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-md-3">Jenis Kelamin</label>
    <div class="col-md-5 input-group">
        {{ Form::select('gender',[], null, array('class'=>'form-control select2 border-br10', 'required','id'=>'gender','placeholder'=>'pilih'))}}
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-md-3">Agama</label>
    <div class="col-md-5 input-group">
        {{ Form::select('religion',[], null, array('class'=>'form-control select2 border-br10', 'required','id'=>'code','placeholder'=>'pilih'))}}
    </div>
  </div>
 <br>
  <dt class="bt-1 mb-0">Informasi Khusus</dt><hr>
  <div class="form-group row">
    <label class="control-label col-md-7">Jumlah Saudara</label>
    <div class="col-md-4 input-group">
        {{ Form::text('gender', null, array('class'=>'form-control select2 border-br10', 'required','id'=>'gender','placeholder'=>'pilih'))}}
    </div>

  </div>
  <div class="form-group row">
    <label class="control-label col-md-7">Status Dalam Keluarga</label>
    <div class="col-md-4 input-group">
        {{ Form::select('gender',[], null, array('class'=>'form-control select2 border-br10', 'required','id'=>'gender','placeholder'=>'pilih'))}}
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-md-7">Nama yang dapat dihubungi dalam keadaan Darurat</label>
    <div class="col-md-4 input-group">
        {{ Form::select('gender',[], null, array('class'=>'form-control select2 border-br10', 'required','id'=>'gender','placeholder'=>'pilih'))}}
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-md-7">No Telp yang dapat dihubungi dalam keadaan Darurat</label>
    <div class="col-md-4 input-group">
        {{ Form::select('gender',[], null, array('class'=>'form-control select2 border-br10', 'required','id'=>'gender','placeholder'=>'pilih'))}}
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label">Alamat Saat ini</label>
    <div class="input-group">
        {{ Form::textarea('description',$data->description ?? null, array('class'=>'form-control border-br10','id'=>'description','placeholder'=>'Pengaturan','rows'=>"5"))}}
    </div>
  </div>
