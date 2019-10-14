<html>
   <head>
      <title>Marriage Registry | Add</title>
      <style>
        h1 {
          text-align: center;
          color: red;
         }
        
      </style>
   </head>
   <h1>
       UPDATE <br>
   </h1>
   <h3>
      Must enter the marriage no <br>
   </h3>
   <body>
     <div class="f">
      <form action = "update1" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table align="center" border="1">
            <tr>
               <td>Marriage no</td>
               <td><input type='int' name='mn' /></td>
            </tr>
            <tr>
               <td>Bride Full Name</td>
               <td><input type='text' name='b_f_name' /></td>
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
               <td>Bride  Birthday</td>
               <td><input type='date' name='b_birthday' /></td>
            </tr>
            <tr>
               <td>Bride Full Address</td>
               <td><input type='text' name='b_address' /></td>
            </tr>
            <tr>
               <td>Bride Religion</td>
               <td><input type='text' name='b_religion' /></td>
            </tr>
            <tr>
               <td>Groom full name</td>
               <td><input type='varchar' name='b_nid' /></td>
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
               <td>Groom  Birthday</td>
               <td><input type='date' name='g_birthday' /></td>
            </tr>
            <tr>
               <td>Groom Full Address</td>
               <td><input type='text' name='g_address' /></td>
            </tr>
            <tr>
               <td>Groom  Religion</td>
               <td><input type='text' name='g_religion' /></td>
            </tr>
            <tr>
               <td>Paid Dower Amount</td>
               <td><input type='int' name='paid_dower' /></td>
            </tr>
            
            
               <td colspan = '2'>
                  <input type = 'submit' value = "UPDATE"/>
               </td>
            </tr>
         </table>
      </form>
   </div>
   </body>
</html>