<?php

namespace App\Http\Controllers;

Use DB;

use Illuminate\Http\Request;

class deleteController extends Controller
{
    public function delete()
    {
        return view('marry_delete');
    }
    public function delete1(Request $request)
    {
        $mn = $request->input('mn');

        $set = DB::select('select `f_name`,`nid` from `people` where `marriage_no`=?
        
        ',[$mn]);

         foreach ($set as $user) {
             echo $user->f_name .'<br>'.$user->nid.'<br>';
             }
       
        
       // $this->temp();
        $this->delete2($mn);
       
    }
    public function temp()
    {
        return view('deleteshow'); 
  
    }
    
    public function delete2(int $mn)
    {
        
        $q1 = DB::delete('DELETE FROM `people` WHERE  `marriage_no`=?',[$mn]);
        $q2 = DB::delete('DELETE FROM `people` WHERE  `marriage_no`=? ',[$mn]);
    
       //$q3 =  DB::delete('DELETE FROM `marriage` WHERE `marriage_no`=? ',[$mn]);
      
       // DB::insert('INSERT INTO `devorse` (`devorse_no`, `marriage_no`, `case_no`, `devorse_date`) 
       //    values(?,?,?,?)',[NULL,$mn,$cn,now()]);
       if($q1==NULL or $q2==NULL)
       {
           echo'No data found to delete';
       }
       else{
        echo "Record deleted and insert in devorse table successfully.<br/>";
       }
       
        echo '<a href = "home">Click Here</a> to go back to home.';
    }
}
