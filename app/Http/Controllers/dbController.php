<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class dbController extends Controller
{
    public function describe_marriage()
    {
        $users = DB::select('describe marriage');
        foreach ($users as $user) {
            echo $user->Field.'    '.$user->Type.'<br>';
            }
         
    }
    public function describe_people()
    {
        $users = DB::select('describe people');
        foreach ($users as $user) {
            echo $user->Field.'    '.$user->Type.'<br>';
            }
         
    }
    public function describe_devorse()
    {
        $users = DB::select('describe devorse');
        foreach ($users as $user) {
            echo $user->Field.'    '.$user->Type.'<br>';
            }
         
    }
    public function select_marriage()
    {
        $users = DB::select('select * from marriage');
        return $users;
         
    }
    public function select_people()
    {
        $users = DB::select('select * from people');
        return $users;
         
    }
    public function select_devorse()
    {
        $users = DB::select('select * from devorse');
        return $users;
         
    }
    //========================================
    public function drop_column()
    {
        echo 'before deleting the row '.'<br>';
        echo '<br>';
        $users = DB::select('describe marriage');
        foreach ($users as $user) {
            echo $user->Field.'    '.$user->Type.'<br>';
            }
        echo '<br>';
        echo 'after deleting the row '.'<br>';
        $users = DB::select('alter table marriage
        drop column paid_dower');  
        echo '<br>';
        $users = DB::select('describe marriage');
        foreach ($users as $user) {
            echo $user->Field.'    '.$user->Type.'<br>';
            }
    }
    //==============================================
    public function add_column()
    {
        echo 'before adding the row '.'<br>';
        echo '<br>';
        $users = DB::select('describe marriage');
        foreach ($users as $user) {
            echo $user->Field.'    '.$user->Type.'<br>';
            }

        echo '<br>';
        echo 'after adding the row '.'<br>';
        echo '<br>';
        $users = DB::select('alter table marriage
        add column paid_dower int(11)');  
        
        $users = DB::select('describe marriage');
        foreach ($users as $user) {
            echo $user->Field.'    '.$user->Type.'<br>';
            }
    }
    //=======================================================
    public function modify_column()
    {
        echo 'before modifing the row '.'<br>';
        echo '<br>';
        $users = DB::select('describe marriage');
        foreach ($users as $user) {
            echo $user->Field.'    '.$user->Type.'<br>';
            }

        echo '<br>';
        echo 'after modifing the row '.'<br>';
        echo '<br>';
        $users = DB::select('alter table marriage
        modify dower int(10)');  
        
        $users = DB::select('describe marriage');
        foreach ($users as $user) {
            echo $user->Field.'    '.$user->Type.'<br>';
            }
    }
    public function update_column()
    {
        echo 'before updating the row '.'<br>';
        echo '<br>';
        $users = DB::select('select * from marriage where marriage_no=1');
        foreach ($users as $user) {
            echo 'marriage_no = '.$user->marriage_no.'   dower = '.$user->paid_dower.'<br>';
            }

        echo '<br>';
        echo 'after modifing the row '.'<br>';
        echo '<br>';
        $users = DB::select('alter table marriage
        modify dower int(10)');  
        
        $users = DB::select('update marriage set paid_dower=90000 where marriage_no=1');
        $users = DB::select('select * from marriage where marriage_no=1');
        foreach ($users as $user) {
            echo 'marriage_no = '.$user->marriage_no.'   dower = '.$user->paid_dower.'<br>';
            }
    }
    public function set_key()
    {
        DB::statement(' alter table  people add CONSTRAINT fkp1  FOREIGN KEY (marriage_no) 
                            REFERENCES marriage  (marriage_no)');
        DB::statement(' alter table  lmr.devorse add CONSTRAINT fkd  FOREIGN KEY (marriage_no) 
                            REFERENCES lmr.marriage  (marriage_no)');    
        echo 'ok';      
    }

}
