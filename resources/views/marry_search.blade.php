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
       SEARCH <br>
   </h1>

   <body>
     <div class="f">
      <form action = "search1" method = "post">
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
               <td>Groom full name</td>
               <td><input type='varchar' name='b_nid' /></td>
            </tr>          
            
              <td colspan = '2'>
                  <input type = 'submit' value = "SEARCH"/>
               </td>
            </tr>
         </table>
      </form>
   </div>
   </body>
</html>