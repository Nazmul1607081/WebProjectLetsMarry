<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use Carbon\Carbon;


class dbController3 extends Controller
{


    public function pl()
    {
         
             
         DB::statement('DROP PROCEDURE IF EXISTS `f`;
         
         CREATE PROCEDURE `f` (IN a int)
         BEGIN
             SELECT * FROM users WHERE id = idx;
         END;
           ');
 
        
    }
}
