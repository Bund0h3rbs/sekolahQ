<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Academic_year extends Model {
  use SoftDeletes;

      protected $table = 'academic_year';
      protected $guarded = ['id'];
      protected $dates = ['deleted_at'];

      public static $rules = array(
        'code' => 'required',
        'name' => 'required'
    );

    public function validate($data)
    {
        $v = Validator::make($data, User_akses::$rules);
        return $v;
    }

    public function parents()
    {
        return $this->hasOne('App\Models\Academic_year', 'id', 'parent');
    }

    public function filterlist($request){
      if (!empty($request->search['value'])){
          $value = $request->search['value'];
              $data =  Academic_year::where('code', 'LIKE', '%' . $value . '%')
              ->orWhere('name', 'LIKE', '%' . $value . '%');
        }else {
              $data = Academic_year::select(['*']);
      }
      return $data;
    }
}
