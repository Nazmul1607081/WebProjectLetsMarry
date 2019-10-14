<?php

namespace App\Http\Controllers;

Use DB;

use Illuminate\Http\Request;

$mn = $request->input('mn');

$set = DB::select('select `f_name`,`nid` from `people` where `marriage_no`=?
        
        ',[$mn]);
         
        $f=0;
         foreach ($set as $user) {
             $f=1;
             echo $user->f_name .'<br>'.$user->nid.'<br>';
             }
     if($f==0)
     {
         echo "No data found";
     }

?>