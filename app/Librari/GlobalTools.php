<?php

namespace App\Librari;

use Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

use App\Models\Menu_akses;

class GlobalTools {

    public function aksesSuperAdmin()
    {
        $user_id        = Auth::user()->id;
        $checkAkses       = \App\Models\User_akses::where('user_id',Auth::user()->id)
        ->whereHas('akses',function ($q){
            $q->where('code','SPADM');
        })->first();

        $akses = false;
        if($checkAkses){
            $akses = true;
        }

        $data['status']   = $akses;

        return (object)$data;

    }

    public function userAkses()
    {
        $user_id     = Auth::user()->id;
        $checkAkses  = \App\Models\User_akses::where('user_id',Auth::user()->id)->first();

        $akses = false;
        if($checkAkses){
            $akses = true;
        }

        $data['status']   = $akses;
        $data['akses_id'] = $checkAkses->akses_id ?? null;

        return (object)$data;
    }

    public function aksesmenu()
    {
        $path     = request::path();
        $exp      = explode('/', $path);
        $urlMenus = isset($exp[0]) ? $exp[0] : null;

        $akses    = false;

        $checkAkses  = \App\Models\User_akses::where('user_id',Auth::user()->id)->first();

        if($checkAkses){
            $menus = \App\Models\Menu_app::where('link',$urlMenus)->first();
            $menusAkses = \App\Models\Menu_role::where('akses_id', $checkAkses->akses_id)
            ->where('active',1)
            ->where('menu_id', $menus->id ?? null)->first();

            if($menusAkses){
                $akses = true;
            }

        }

        $data['status']   = $akses;

        return (object)$data;

    }

    public function storeAksesDefault($id = null)
    {

        $checkMenuAkses = Menu_akses::where('code','SPADM')->where('active',1)->first();

        // dd($id, $checkMenuAkses);
        if(isset($checkMenuAkses) && $id != null ){
            $data['menu_id']  = $id;
            $data['akses_id'] = $checkMenuAkses->id ?? null;
            $data['active'] = 1;

            \App\Models\Menu_role::create($data);
        }

    }

    public function listMenu($akses_id)
    {
        $menus_parent = [];
        if(!is_null($akses_id)){
            $menusAkses = \App\Models\Menu_role::whereHas('menus',function ($q) {
                $q->whereNull('parent');
            })->where('akses_id', $akses_id)->where('active',1)->pluck('menu_id')->all();

            $menus_parent = \App\Models\Menu_app::whereIn('id',$menusAkses)->where('active',1)->orderBy('no_urut', 'ASC')->get();
         }

        return $menus_parent;
    }

    public function subMenu($menuIds, $akses_id)
    {
        $data = [];
        if(!is_null($akses_id)){
            $menusAkses = \App\Models\Menu_role::whereHas('menus',function ($q) {
                $q->whereNotnull('parent');
            })->where('akses_id', $akses_id)->where('active',1)->pluck('menu_id')->all();;

            // if($menusAkses){
                $menus_parent = \App\Models\Menu_app::whereIn('id',$menusAkses)->where('parent',$menuIds)->orderBy('no_urut', 'ASC')->where('active',1)->get();
            // }
         }

        return $menus_parent;
    }

    public function gender()
    {
        $gender = [
            1=> 'LAKI - LAKI',
            2=> 'PEREMPUAN',
        ];
        return $gender;
    }


    public function religion()
    {
        $religion = [
            1=> 'ISLAM',
            2=> 'KRISTEN',
            3=> 'KRISTEN KATOLIK',
            4=> 'HINDU',
            5=> 'BUDHA',
            6=> 'KONGHUCU',
        ];
        return $religion;
    }

    public function family_status()
    {
        $religion = [
            1=> 'Ayah',
            2=> 'Ibu',
            3=> 'Wali',
            4=> 'Paman',
            5=> 'Bibi',
            6=> 'Saudara Laki-laki',
            6=> 'Saudara Perempuan',
        ];
        return $religion;
    }

}

