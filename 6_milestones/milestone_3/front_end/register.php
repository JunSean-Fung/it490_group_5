<?php
   require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Project X: Register</title>
   </head>
   <body>
      <div class="container">
         <div class="row">
               <div class="col-md-7">
                  <div class="card">
                     <form method="POST" action="backend.php" class="box">
                           <h1>Register</h1>
                           <p class="text-muted"> Please enter a Username, Email and Password</p> 
                           <!--Input Field-->
                           <input type="text" name="username" placeholder="Username"> 
                           <input type="text" name="email" placeholder="Email">
                           <input type="password" name="password" placeholder="Password">
                           <!-- Register Button-->
                           <input type='submit' name='register' value='Register'>
                           <br>
                           <a href="login.html">Already registered? Click here to login</a>
                     </form>
                  </div>
               </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>