<?php
   require '../php/head.php'; # Needs to be "../php/head.php"
   #require('RabbitMQClient.php');

   if(isset($_POST['submitButton'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $confirm = $_POST['confirmPassword'];
      if($password != $confirm)
      {
         echo "Passwords dont match";
         exit();
      }

      if ($username != "" && $password != ""){
         $hash = password_hash($password, PASSWORD_BCRYPT);
         $rabbitResponse = register($username, $hash);

         if($rabbitResponse==false){
               echo "account already created";

         }else{

               echo "Account is created";
               header("Location: ../php/login.php");

         }
      }else{
         echo "Nothing entered";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Project X: Register</title>
      <link rel="stylesheet" href="../css/loginNReg.css"/>
   </head>
   <body>
      <div class="container">
         <div class="row">
               <div class="col-md-7">
                  <div class="card">
                     <form method="POST" action="#" class="box">
                           <h1>Register</h1>
                           <p class="text-muted"> Please enter a Username, Email and Password</p> 
                           <!--Input Field-->
                           <input type="text" name="username" placeholder="Username"> 
                           <input type="text" name="email" placeholder="Email">
                           <input type="password" name="password" placeholder="Password">
                           <input name="confirmPassword" type="password" class="form-control" placeholder="Confirm Password" required/>
                           <!-- Register Button-->
                           <input type='submit' name='submitButton' value='Submit'>                           
                           <br>
                           <a href="../php/login.php">Already registered? Click here to login</a>
                     </form>
                  </div>
               </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>