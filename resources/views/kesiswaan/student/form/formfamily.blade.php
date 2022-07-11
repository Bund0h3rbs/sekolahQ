<div class="card-title mb-3">
    <dt>Data Orang Tua/ Wali</dt>
</div>
    <div class="form-group row">
        <label class="control-label col-md-3">Nama Ayah</label>
        <div class="col-md-8 input-group">
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
        <label class="control-label col-md-3">Agama Ayah</label>
        <div class="col-md-6 input-group">
            {{ Form::select('religion',[], null, array('class'=>'form-control select2 border-br10', 'required','id'=>'code','placeholder'=>'pilih'))}}
        </div>
    </div>
    <div class="form-group row">
        <label class="control-label col-md-3">Pekerjaan Ayah</label>
        <div class="input-group col-md-6">
            {{ Form::text('name',$data->code ?? null, array('class'=>'form-control border-br10 col-md-8', 'required','id'=>'name','placeholder'=>'nama llengkap'))}}
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-3">No Telp Ayah</label>
        <div class="input-group col-md-6">
            {{ Form::text('name',$data->code ?? null, array('class'=>'form-control border-br10 col-md-8', 'required','id'=>'name','placeholder'=>'nama llengkap'))}}
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-md-3">Alamat Ayah</label>
        <div class="input-group col-md-8">
            {{ Form::textarea('description',$data->description ?? null, array('class'=>'form-control border-br10','id'=>'description','placeholder'=>'Pengaturan','rows'=>"5"))}}
        </div>
      </div>






  <!-- IBU -->
  <div class="form-group row">
    <label class="control-label col-md-3">Nama Ibu</label>
    <div class="col-md-8 input-group">
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
        <label class="control-label col-md-3">Agama Ibu</label>
        <div class="col-md-6 input-group">
            {{ Form::select('religion',[], null, array('class'=>'form-control select2 border-br10', 'required','id'=>'code','placeholder'=>'pilih'))}}
        </div>
    </div>
    <div class="form-group row">
    <label class="control-label col-md-3">Pekerjaan Ibu</label>
    <div class="input-group col-md-6">
        {{ Form::text('name',$data->code ?? null, array('class'=>'form-control border-br10 col-md-8', 'required','id'=>'name','placeholder'=>'nama llengkap'))}}
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-md-3">No Telp Ibu</label>
    <div class="input-group col-md-6">
        {{ Form::text('name',$data->code ?? null, array('class'=>'form-control border-br10 col-md-8', 'required','id'=>'name','placeholder'=>'nama llengkap'))}}
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-md-3">Alamat Ibu</label>
    <div class="input-group col-md-8">
        {{ Form::textarea('description',$data->description ?? null, array('class'=>'form-control border-br10','id'=>'description','placeholder'=>'Pengaturan','rows'=>"5"))}}
    </div>
  </div>








  <!-- Wali -->
 <div class="form-group row">
    <label class="control-label col-md-3">Nama Wali</label>
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
    <label class="control-label col-md-3">Agama</label>
    <div class="col-md-5 input-group">
        {{ Form::select('religion',[], null, array('class'=>'form-control select2 border-br10', 'required','id'=>'code','placeholder'=>'pilih'))}}
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-md-3">Jenis Kelamin</label>
    <div class="col-md-5 input-group">
        {{ Form::select('religion',[], null, array('class'=>'form-control select2 border-br10', 'required','id'=>'code','placeholder'=>'pilih'))}}
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-md-3">Pekerjaan</label>
    <div class="col-md-6 input-group">
        {{ Form::text('name',$data->code ?? null, array('class'=>'form-control border-br10', 'required','id'=>'name','placeholder'=>'nama llengkap'))}}
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-md-3">No Telp</label>
    <div class="col-md-6 input-group">
        {{ Form::text('name',$data->code ?? null, array('class'=>'form-control border-br10', 'required','id'=>'name','placeholder'=>'nama llengkap'))}}
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-md-3">Alamat</label>
    <div class="col-md-8 input-group">
        {{ Form::textarea('description',$data->description ?? null, array('class'=>'form-control border-br10','id'=>'description','placeholder'=>'Pengaturan','rows'=>"5"))}}
    </div>
  </div>
