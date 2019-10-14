<html>
   <head>
      <title>Marriage Registry | Add</title>
      <style>
        h1, h5 {
          text-align: center;
          color: red;
         }
        
      </style>
   </head>
   <h1>
       DIVORCE <br>
   </h1>
   <h5>
       Please enter the marriage no<br>
   </h5>

   <body>
     <div class="f">
      <form  action = "delete1" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table align="center" border="1">
            <tr>
               <td>Marriage no</td>
               <td><input type='int' name='mn' /></td>
            </tr>
            
            
            
               <td colspan = '2'>
                  <input type = 'submit' value = "Devorse"/>
               </td>
            </tr>
         </table>
      </form>
   </div>
   </body>
</html>