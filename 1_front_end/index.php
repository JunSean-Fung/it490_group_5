<?php
    /* Purpose: 
        (1) Landing Page    
        (2) Authtenticate based on cookie, see if user already signed in, redirect to appropriate page
    */
    require '../php/head.php';
?>

<!doctype html>
<html lang="en">
   <head>
        <title>Project X Main Page</title>
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
            include('../php/topBar.php')
         ?>
      </div>
      <main>
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
                        <p class="lead mb-0">Details/ descption about this</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('../projectX/assets/img/img_2.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>View Most Up-to-date info about Crypto</h2>
                        <p class="lead mb-0">Details/ descption about this</p>
                    </div>
                </div>                
            </div>
        </section>
                 

      </main>
      <!-- Footer -->
      <?php 
         include('../projectX/php/footer.php')
      ?>

      <!-- Script -->
      <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>