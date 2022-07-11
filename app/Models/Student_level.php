<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student_level extends Model {
  use SoftDeletes;

      protected $table = 'student_level';
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

    public function student(){
      return $this->belongsTo('App\Models\Student','student_id','id');
    }

    public function kelas(){
      return $this->belongsTo('App\Models\Kelas','kelas_id','id');
    }

    public function academic_year(){
      return $this->belongsTo('App\Models\Academic_year','academic_year_id','id');
    }

    public function filterlist($request){
      if (!empty($request->search['value'])){
          $value = $request->search['value'];
              $data =  Student_level::where('code', 'LIKE', '%' . $value . '%')
              ->orWhere('name', 'LIKE', '%' . $value . '%');
        }else {
              $data = Student_level::select(['*']);
      }
      return $data;
    }
}
