<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Carbon\Carbon;

class updateController extends Controller
{
    public function update()
    {
        return view('marry_update');
    }
    public function update1(Request $request)
    {
        $mn = $request->input('mn');

        
        $b_f_name =  $request->input('b_f_name');
      
      $b_father_name = $request->input('b_father_name');
      $b_mother_name = $request->input('b_mother_name');
      $b_address = $request->input('b_address'); 
      $b_religion = $request->input('b_religion');

      $g_f_name = $request->input('g_f_name'); 
      
      $g_father_name = $request->input('g_father_name');
      $g_mother_name = $request->input('g_mother_name');
      $g_address = $request->input('g_address');
      $g_religion = $request->input('g_religion');
      
      $paid_dower = $request->input('paid_dower');
      $b_birthday = $request->input('b_birthday');
      $g_birthday = $request->input('g_birthday');

      $byears = Carbon::parse($b_birthday)->age;
      $gyears = Carbon::parse($g_birthday)->age;

      $male = 'male';
      $female = 'female';

      $users = DB::select('select * from people where marriage_no = ? and gender =?',[$mn,$male]);
        foreach ($users as $user) {
            if($b_f_name==NULL)
            {
                $b_f_name=$user->f_name;
            }
            
            if($b_father_name==NULL)
            {
                $b_father_name=$user->father_name;
            }
            
            if($b_mother_name==NULL)
            {
                $b_mother_name=$user->mother_name;
            }
            if($b_address==NULL)
            {
                $b_address=$user->address;
            }
            if($b_religion==NULL)
            {
                $b_religion=$user->religion;
            }
            
         }
         $users = DB::select('select * from people where marriage_no = ? and gender =?',[$mn,$female]);
        foreach ($users as $user) {
            if($g_f_name==NULL)
            {
                $g_f_name=$user->f_name;
            }
            
            if($g_father_name==NULL)
            {
                $g_father_name=$user->father_name;
            }
            
            if($g_mother_name==NULL)
            {
                $g_mother_name=$user->mother_name;
            }
            if($g_address==NULL)
            {
                $g_address=$user->address;
            }
            if($g_religion==NULL)
            {
                $g_religion=$user->religion;
            }
            
         }



        

      
      DB::update('UPDATE `marriage` SET `paid_dower` = ? WHERE `marriage_no` =?', [$paid_dower,$mn]);
        
      DB::update('UPDATE `people` SET `f_name` = ?,`father_name` = ?,`mother_name` = ?,`address` = ?,`religion` = ?
       WHERE `marriage_no`= ? and `gender` = ?', [$b_f_name,$b_father_name,$b_mother_name,$b_address,
                                             $b_religion,$mn,$male]); 
    DB::update('UPDATE `people` SET `f_name` = ?,`father_name` = ?,`mother_name` = ?,`address` = ?,`religion` = ?
    WHERE `marriage_no`= ? and `gender` = ?', [$b_f_name,$b_father_name,$b_mother_name,$b_address,
                        $b_religion,$mn,$female]);
 
       echo "Record updated successfully.<br/>";
        echo '<a href = "home">Click Here</a> to go back.';
    }
}
