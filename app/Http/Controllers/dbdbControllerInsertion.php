<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class dbdbControllerInsertion extends Controller {
  
   public function insertform() {
      return view('marry_create');
   }
	
   public function insert(Request $request) {
      
      $b_f_name =  $request->input('b_f_name');
      $b_nid = $request->input('b_nid');
      $b_father_name = $request->input('b_father_name');
      $b_mother_name = $request->input('b_mother_name');
      $b_address = $request->input('b_address'); 
      $b_religion = $request->input('b_religion'); 
      $g_f_name = $request->input('g_f_name'); 
      $g_nid = $request->input('g_nid'); 
      $g_father_name = $request->input('g_father_name');
      $g_mother_name = $request->input('g_mother_name');
      $g_address = $request->input('g_address');
      $g_religion = $request->input('g_religion');
      $spectator1_name = $request->input('spectator1_name');
      $spectator1_nid = $request->input('spectator1_nid');
      $spectator2_name = $request->input('spectator2_name');
      $spectator2_nid = $request->input('spectator2_nid');
      $dower = $request->input('dower');
      $paid_dower = $request->input('paid_dower');
      $b_birthday = $request->input('b_birthday');
      $g_birthday = $request->input('g_birthday');

      $byears = Carbon::parse($b_birthday)->age;
      $gyears = Carbon::parse($g_birthday)->age;
      
    $male = 'male';
    $female = 'female';
   
   if(!preg_match("/^[0-9'-]+$/",$b_nid)) { 
       
      echo "<script>alert('bride id problem');history.go(-1)</script>";
   } 
    
   
    
  
  if(!preg_match("/^[0-9'-]+$/",$g_nid)) { 
      
     echo "<script>alert('groom id problem');history.go(-1)</script>";
  } 
    
  if(!preg_match("/^[0-9'-]+$/",$spectator1_nid)) { 
      
     echo "<script>alert('spectator1 id problem');history.go(-1)</script>";
  } 
  
if(!preg_match("/^[0-9'-]+$/",$spectator2_nid)) { 
   
  echo "<script>alert('spectator2 id problem');history.go(-1)</script>";
} 
    else
    { 
      $temp1 = 0;
      $upd = DB::select('select unp(dower,paid_dower)as u from marriage ');
      foreach ($upd as $user) {
        $temp1 = $user->u;
        }
      
     $u=  DB::insert('INSERT INTO `marriage` (`marriage_no`, `marriage_date`, `spectator1_name`,
      `spectator1_nid`, `spectator2_name`, `spectator2_nid`, `dower`, `paid_dower`,`unpaid_dower`) 
                   values(?,?,?,?,?,?,?,?,?)',[NULL,now(),$spectator1_name,$spectator1_nid, 
                  $spectator2_name,$spectator2_nid,$dower,$paid_dower,$temp1]);
      $temp = 0;
     
      
      $users = DB::select('select * from marriage');
      foreach ($users as $user) {
        $temp = $user->marriage_no;
        }
        

    if($u!=NULL)
    {
      
      $u1=  DB::insert('INSERT INTO `people` (`s_no`, `nid`, `f_name`, `father_name`, 
      `mother_name`, `address`, `birthday`, `age`, `gender`, `religion`, `marriage_no`)
       VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',[NULL,$b_nid,$b_f_name,$b_father_name,$b_mother_name,
          $b_address,$b_birthday,$byears,$male,$b_religion,$temp]);
    }
     if($u1=null)
     {
      DB::insert('INSERT INTO `people` (`s_no`, `nid`, `f_name`, `father_name`, 
      `mother_name`, `address`, `birthday`, `age`, `gender`, `religion`, `marriage_no`)
       VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',[NULL,$g_nid,$g_f_name,$g_father_name,$g_mother_name,
          $g_address,$g_birthday,$gyears,$female,$g_religion,$temp]);
     }
     echo "Record inserted successfully.<br/>";
      echo '<a href = "home">Click Here</a> to go back to home.';
      $pagi = DB::table('users')->simplePaginate(2);
   }
   }
   
}