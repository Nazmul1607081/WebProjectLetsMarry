<?php

namespace App\Http\Controllers;

use DB;

use Carbon\Carbon;

use Illuminate\Http\Request;

class dshowController extends Controller
{
    
    public function dshow()
    
    {
        echo '<h1 align="center" border="1" >'. 'ALL DEVORSE DATA' .'</h1>';
            $users= DB::select('select p.f_name,p.address
            ,m.marriage_no,m.devorse_no,m.devorse_date,m.nid
            from dpeople p,devorse m
            where p.nid=m.nid');
            
            echo '<table align="center" border="1" >';

            echo '<tr>
            <th>Devorse No</th>
            <th>Marriage NO</th><th>Full Name</th><th>Address</th><th>NID</th><th>Devorse Date</th>
            </tr>';





            foreach ($users as $user) {
                  
                echo '<tr><td>'.$user->devorse_no.'</td><td>'.$user->marriage_no.'</td><td>'.$user->f_name.'</td>
                
                
                <td>'.$user->address.'</td>
                
                
                <td>'.$user->nid.'</td><td>'.$user->devorse_date.'</td>
                </tr>'   ;   

            
            }

            echo '</table>';   
        


        

      
     
 
        echo "Record showed successfully.<br/>";
        echo '<a href = "home">Click Here</a> to go back to home.';
    }
}
