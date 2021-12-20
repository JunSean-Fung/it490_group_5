<?php
      /* Purpose: 
         (1) Landing Page    
         (2) Authtenticate based on cookie, see if user already signed in, redirect to appropriate page
         
         Note:
         1) [Path]: must have projectX in the path like this: ../projectX/folderName/fileName.fileType
         
         Task:
         1) Refine the responsiveness with bootstrap

      */
      # Get the header file
      require '../projectX/php/head.php'; # need to be ../projectX/php/head.php
?>

<!doctype html>
<html lang="en">
   <head>
        <title>Home</title>
        <!-- Bootstrap/ CSS -->
        <link href="../projectX/css/headers.css" rel="stylesheet">
        <!-- <link href="../projectX/css/product.css" rel="stylesheet"> -->
        <link href="../projectX/css/mainPage.css" rel="stylesheet">

        <style>
         .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         user-select: none;
         }

         @media (min-width: 768px) {
         .bd-placeholder-img-lg {
            font-size: 3.5rem;
         }
         }
      </style>
   </head>
   <body>
      
      <!--This is the topbar-->
      <div id = "topBar">
         <?php 
            include('../projectX/php/topBar.php') 
         ?>
      </div>
      <div class="container-fluid  w-100 h-100 mx-auto flex-column px-0">
         <main>
            <div class= "container-fluid px-0">
               <!-- Two Side of Guides -->
               <section class="text-center showcase">
                  <div class="d-md-flex flex-md-equal w-100">
                     <div class="bg-game pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden showcase-text" >
                        <div class="my-3 py-3">
                           <h2 class="display-5">Gaming <br>Guides </h2>
                           <p class="lead">Get all your gaming information up to speed to help you enjoy the most of the your gaming experience</p>
                           <a class="btn btn-game btn-outline-secondary text-dark" href="../projectX/php/gamingGuide.php">Learn More</a>
                           <!--This where gaming page link will go-->
                        </div>

                        <!-- <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> -->
                     </div>
                     <div class="bg-crypto pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                        <div class="my-3 p-3">
                           <h2 class="display-5">Crypto-Trading <br>Guides</h2>
                           <p class="lead">Learn about crypto-trading curated to help you get started and up to-date with its current event</p>
                           <a class="btn btn-crypto btn-outline-secondary text-dark" href="../projectX/php/cryptoGuide.php">Learn More</a>
                           <!--This is where Crypto page will go-->
                        </div>
                        <!-- <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> -->
                     </div>
                  </div>
               </section>
               <!-- Description about ProjectX -->
               <section class="showcase">
                  <div class="container-fluid p-0">
                     <div class="row g-0">
                        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('../projectX/assets/img/img_1.jpg')"></div>
                        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                              <h2>Find any Games Reviews</h2>
                              <p class="lead mb-0">You can see the top trending games and find any games review that you want to see in just 3 clicks</p>
                        </div>
                     </div>
                     <div class="row g-0">
                        <div class="col-lg-6 text-white showcase-img" style="background-image: url('../projectX/assets/img/img_2.jpg')"></div>
                        <div class="col-lg-6 my-auto showcase-text">
                              <h2>View Most Up-to-date info about Crypto</h2>
                              <p class="lead mb-0">You can see the top trending games and find any games review that you want to see in just 3 clicks</p>
                        </div>
                     </div>                
                  </div>
               </section>
            </div>     
         </main>
      </div>
      
      <!-- Footer -->
      <?php 
         include('../projectX/php/footer.php')
      ?>

      <!-- Script -->
      <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>