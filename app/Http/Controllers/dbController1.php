<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use count;

use Illuminate\Http\Request;

class dbController1 extends Controller
{
    public function distinct()
    {
        $users1= DB::select('select religion from people');
        foreach ($users1 as $user) {
            echo $user->religion.'<br>';
            }
        echo '<br> <br> After used distinct <br><br> ';
        $users= DB::select('select distinct (religion) from people');
        foreach ($users as $user) {
            echo $user->religion.'<br>';
            }
    }
    public function compound_comparator()
    {
        $users= DB::select('select dower from marriage
        where dower>=50000 and dower<=100000');
        return $users;
    }
    public function renge_condition()
    {
        $users= DB::select('select dower from marriage 
        where dower between 50000 and 100000');
        return $users;
    }
    public function set_membership()
    {
        $users= DB::select('select dower from marriage 
        where dower in(50000,100000)');
        return $users;
    }
    public function pattern_matching()
    {
        $pm = '%mu%';
        $users= DB::select('select f_name from people
        where address like ?',['%ka%']);
        return $users;
    }
    public function column_ordering()
    {
        $users= DB::select('select marriage_no,dower from marriage
        order by dower');
        return $users;
        echo '<br> <br> Decending ordering <br><br> ';
        $users= DB::select('select marriage_no,dower from marriage
        order by dower desc');
        foreach ($users as $user) {
            echo $user->marriage_no.'<br>';
            }
    }
    public function multiple_column_ordering()
    {
        $users= DB::select('select p.f_name,p.nid,p.father_name,p.mother_name,p.address
            ,p.birthday,p.age,p.gender,p.religion,m.marriage_date,m.marriage_no,m.dower
            ,m.paid_dower,m.spectator1_name,m.spectator1_nid
            ,m.spectator2_name,m.spectator2_nid
            from people p,marriage m
            where p.marriage_no=m.marriage_no
            order by p.age ');
            
            echo '<h1 align="center" border="1" >'.'The List of the married people by age: '.'</h1>';

            echo '<table align="center" border="1">';

            echo '<tr>
            <th>Marriage No</th>
            <th>Full Name</th><th>NID</th><th>Father Name</th><th>Mother Name</th><th>Address</th>
            <th>Birthday</th><th>Age</th><th>Gender</th><th>Religion</th>
            <th>Spectator1 Name</th><th>Spectator2 Name</th><th>Dower amount</th><th>Paid Dower Amount</th>
            </tr>';





            foreach ($users as $user) {
                  
                echo '<tr><td>'.$user->marriage_no.'</td><td>'.$user->f_name.'</td>
                <td>'.$user->nid.'</td>
                <td>'.$user->father_name.'</td>
                <td>'.$user->mother_name.'</td><td>'.$user->address.'</td><td>'.$user->birthday.'</td>
                <td>'.$user->age.'</td>
                <td>'.$user->gender.'</td>
                <td>'.$user->religion.'</td><td>'.$user->spectator1_name.'</td><td>'.$user->spectator2_name.'</td>
                <td>'.$user->dower.'</td><td>'.$user->paid_dower.'</td></tr>'   ;   

            
            }

            echo '</table>';   
        
        echo "Record showed successfully.<br/>";
        echo '<a href = "home">Click Here</a> to go back to home.';
    }
    public function aggregate_function_count()
    {
        $users= DB::select('select count(nid)as cm from people');
        echo '<h1 align="center" border="1">'.'The number of marries and devorse  : '.'</h1>';
        echo '<table align="center" border="1">';

        echo '<tr>
        <th>The number of marries</th>
        <th>'.$users[0]->cm.'</th>
        </tr>';
        $users= DB::select('select count(nid)as cm from devorse');
        echo '<tr>
        <th>The number of devorse people</th>
        <th>'.$users[0]->cm.'</th>
        </tr>';
        $users= DB::select('select nid  from people 
        union all
        select nid  from dpeople 
        ');
        
        $c=0;
        foreach ($users as $user) {
            $c=$c+1;
            }
        echo '<tr>
        <th>The number of devorse and married people</th>
        <th>'.$c.'</th>
        </tr>';
        echo '</table>';
         
        
    }
    public function aggregate_function_sum()
    {
        $users= DB::select('select sum(paid_dower) from marriage');
        return $users;
        
    }
    public function aggregate_function_max()
    {
        $users= DB::select('select max(dower) from marriage');
        return $users;
        
    }
    public function aggregate_function_avg()
    {
        $users= DB::select('select ifnull(sum(dower),0)as ad from marriage');
        echo '<h1 align="center" border="1">'.'The average dower amount is : '.'</h1>';
        foreach ($users as $user) {
            echo '<center>'.$user->ad.'<br>'.'</center>';
            }
        
    }
    public function nvl()
    {
        $users= DB::select('select avg(nvl(paid_dower,0))from marriage');
        return $users;
        
    }

    public function group_by()
    {
        $users= DB::select('select religion,count(religion)as cr from people
        group by religion');
        echo '<h1 align="center">'.'Married people count by religion '.'</h1>';
        echo '<table align="center" border="1">';

        echo '<tr>
        <th>Religion</th>
        <th>Number</th>
        </tr>';
        foreach ($users as $user) {
            echo '<tr><td>'.$user->religion.'</td><td>'.$user->cr.'</td>
           </tr>'   ;   

            }
        echo '</table>';   
    }

    public function having()
    {
        $users= DB::select('select religion from people
        group by (religion)
        having count(religion)>1');
        return $users;
        
    }

}
