<html>
   <head>
      <title>Marriage Registry | Add</title>
      <style>
        
        
      </style>
   </head>
  

   <body style='background-image:linear-gradient(red, yellow)'>
   
   <div>
   <h1>
   <center>
   
       Insert a marriage data <br>
   
   </center>
   </div>
   </h1>
   <hr>
     <div class="f">
      <form action = "create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table align="center" border="1">

            <tr>
               <td>Bride Full Name</td>
               <td><input type='text' name='b_f_name' /></td>
            </tr>
            <tr>
               <td>Bride NID</td>
               <td><input type='varchar' name='b_nid' /></td>
            </tr>
            <tr>
               <td>Bride  Birthday</td>
               <td><input type='date' name='b_birthday' /></td>
            </tr>
            <tr>
               <td>Bride Father Name</td>
               <td><input type='text' name='b_father_name' /></td>
            </tr>
            <tr>
               <td>Bride Mother Name</td>
               <td><input type='text' name='b_mother_name' /></td>
            </tr>
            <tr>
               <td>Bride Full Address</td>
               <td><input type='text' name='b_address' /></td>
            </tr>
            <tr>
               <td>Bride Religion</td>
               <td><select name="b_religion">
                   <option value="Islam">Islam</option>
                   <option value="Hindu">Hindu</option>
                   <option value="buddh">Buddh</option>
                   <option value="Christian">Christain</option>
                   </select>
                                        
                                        
               </td>
            </tr>
            


            <tr>
               <td>Groom Full Name</td>
               <td><input type='text' name='g_f_name' /></td>
            </tr>
            <tr>
               <td>Groom  NID</td>
               <td><input type='varchar' name='g_nid' /></td>
            </tr>
            <tr>
               <td>Groom  Birthday</td>
               <td><input type='date' name='g_birthday' /></td>
            </tr>
            <tr>
               <td>Groom  Father Name</td>
               <td><input type='text' name='g_father_name' /></td>
            </tr>
            <tr>
               <td>Groom  Mother Name</td>
               <td><input type='text' name='g_mother_name' /></td>
            </tr>
            <tr>
               <td>Groom Full Address</td>
               <td><input type='text' name='g_address' /></td>
            </tr>
            <tr>
               <td>Groom Religion</td>
               <td><select name="g_religion">
                   <option value="Islam">Islam</option>
                   <option value="Hindu">Hindu</option>
                   <option value="buddh">Buddh</option>
                   <option value="Christian">Christain</option>
                   </select>
                                        
                                        
               </td>
            </tr>

         
            <tr>
               <td>Spectator1 name</td>
               <td><input type='text' name='spectator1_name' /></td>
            </tr>
            <tr>
               <td>Spectator1 nid</td>
               <td><input type='varchar' name='spectator1_nid' /></td>
            </tr>
            <tr>
               <td>Spectator2 name</td>
               <td><input type='text' name='spectator2_name' /></td>
            </tr>
            <tr>
               <td>Spectator2 nid</td>
               <td><input type='varchar' name='spectator2_nid' /></td>
            </tr>


            <tr>
               <td>Dower Amount</td>
               <td><input type='int' name='dower' /></td>
            </tr>
            <tr>
               <td>Paid Dower Amount</td>
               <td><input type='int' name='paid_dower' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add Marry"/>
               </td>
            </tr>
         </table>
      </form>
   </div>
   </body>
</html>