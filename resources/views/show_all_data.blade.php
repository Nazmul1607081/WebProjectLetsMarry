echo '<h1  align="center" >'. 'ALL MARRIAGE DATA' .'</h1>';
            $users= DB::select('select p.f_name,p.nid,p.father_name,p.mother_name,p.address
            ,p.birthday,p.age,p.gender,p.religion,m.marriage_date,m.marriage_no,m.dower
            ,m.paid_dower,m.spectator1_name,m.spectator1_nid
            ,m.spectator2_name,m.spectator2_nid
            from people p,marriage m
            where p.marriage_no=m.marriage_no');
            
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
