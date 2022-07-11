<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model {
  use SoftDeletes;

      protected $table = 'classroom';
      protected $guarded = ['id'];
      protected $dates = ['deleted_at'];

      public static $rules = array(
        'code' => 'required',
        'name' => 'required'
    );

    public function validate($data)
    {
        $v = Validator::make($data, Kelas::$rules);
        return $v;
    }

    public function academic_year(){
        return $this->belongsTo('App\Models\Academic_year','academin_year_id','id');
    }

    public function semester(){
        return $this->belongsTo('App\Models\Menu_app','academin_year_id','id');
    }

    public function filterlist($request){
      if (!empty($request->search['value'])){
          $value = $request->search['value'];
              $data =  Classroom::where('code', 'LIKE', '%' . $value . '%')
              ->orWhere('name', 'LIKE', '%' . $value . '%');
        }else {
              $data = Classroom::select(['*']);
      }
      return $data;
    }
}
