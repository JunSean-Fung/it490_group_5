<?php
    /* Purpose: 
        (1) Landing Page    
        (2) Authtenticate based on cookie, see if user already signed in, redirect to appropriate page
    */
    require '../projectX/php/head.php';
?>

<!doctype html>
<html lang="en">
   <head>
        <title>Project X: Crypto</title>
        <!-- Bootstrap/ CSS -->
        <!-- <link href="../projectX/css/assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="../projectX/css/headers.css" rel="stylesheet">
        <link href="../projectX/css/product.css" rel="stylesheet">
        <link href="../projectX/css/mainPage.css" rel="stylesheet">
        <link href="../projectX/css/footer.css" rel="stylesheet">
   </head>
   <body>
        <!--This is the topbar-->
        <div id = "topBar">
        <?php 
        include('../projectX/php/topBar.php')
        ?>
        </div>
        <main>
        </main>
        <!-- Footer -->
        <footer class="text-muted footer">
            <div>
            <ul>
               <li><a href="../projectX/php/about.php">About Us</a></li>
               <li><a href="https://github.com/JunSean-Fung/it490_group_5">Github</a></li>
            </ul>
            </div>
        </footer>

        <!-- Script -->
        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>