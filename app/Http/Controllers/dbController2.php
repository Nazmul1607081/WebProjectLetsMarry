<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use Illuminate\Support\ServiceProvider;

class dbController2 extends Controller
{
    public function join()
    {
        $users= DB::select('select p.f_name,m.marriage_date,m.marriage_no,m.dower,m.paid_dower,m.spectator1_nid,m.spectator2_nid
        from people p,marriage m
        where p.marriage_no=m.marriage_no');
        return $users;
    }
    public function natural_join()
    {
        $users= DB::select('select p.f_name,m.marriage_date,m.dower,m.paid_dower,m.spectator1_nid,m.spectator2_nid
        from people p  natural join marriage m');
        return $users;
    }
    public function inner_join()
    {
        $users= DB::select('select people.f_name,people.marriage_no,devorse.case_no,devorse.devorse_date
        from people inner join devorse
        on people.marriage_no=devorse.marriage_no');
        return $users;
    }
    public function left_outer_join()
    {
        $users= DB::select('select people.f_name,people.marriage_no,devorse.case_no,devorse.devorse_date
        from people left outer join devorse
        on people.marriage_no=devorse.marriage_no');
        return $users;
    }
    public function right_outer_join()
    {
        $users= DB::select('select people.f_name,people.marriage_no,devorse.case_no,devorse.devorse_date
        from people right outer join devorse
        on people.marriage_no=devorse.marriage_no');
        return $users;
    }
    public function full_outer_join()
    {
        $users= DB::select('select people.f_name,people.marriage_no,devorse.case_no,devorse.devorse_date
        from people full outer join devorse
        on people.marriage_no=devorse.marriage_no');
        return $users;
    }
    public function self_join()
    {
        
        



    }
    
}
