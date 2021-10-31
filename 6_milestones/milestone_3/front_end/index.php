<?php
    # This is temp for milestone 3 only, the index should be the main page of the project X

    require 'db_key.php';
    #include "login.html"
    #include "register.php" # Debugging
?>
<body>
<div class = 'container'>
<div>
<div><h1>Login to your account</h1></div>
</div>
<form method = 'POST' action = 'backend.php' >
<div class="form-group">
<label>Username : </label>
<input class= 'form-control w-25' type="text" name="username">
<label>Password :</label>
<input class= 'form-control w-25' type="password" name="password" id="password" autocomplete="off">
</div>
<button class = 'btn btn-outline-info' type="submit" name="login" value= 'login' class="submit">Login</button>
</form>
<div id="footer-box">
<p>Not a member? <a href="register.php" class="sign-up">Sign up now</a></p>
</div>
</div>
</body>
</html>