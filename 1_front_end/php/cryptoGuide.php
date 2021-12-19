<?php
    /* Purpose: 
        (1) Crypto-related
    */
    #include '../projectX/php/head.php';
    
?>

<!doctype html>
<html lang="en">
<head>
    <title>ProjectX: Crypto</title>
    <!-- Bootstrap/ CSS -->
    <!-- Meta-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="IT490 project">
    <meta name="author" content="Group 5">    
    <!-- Bootstrap 5 from getbootstrap.com -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
    <!--This is the topbar-->

    <!-- Slogan with search bar -->
    <div class="container-fluid">
        <div class="row">
            <div class=" Jumbotron p-3 p-md-5 d-flex align-items-center text-white bg-dark">
                <div>
                    <h1>Every Road to riches start with a search</h1>
                </div>
                <!-- Search Bar -->
                <div class="col-md-12">
                    <div class="search-2"> 
                        <i class='bx bxs-map'></i> 
                        <input type="text" placeholder="San Francisco,USA"> 
                        <button>Search</button> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table with search result from the API data -->
    <table class="table table-bordered" style="margin-top:20px">
        <h1>Top Five Crypto</h1>
        <thead>            
            <th scope="col">Name</th>
            <th scope="col">Symbol</th>
            <th scope="col">Price</th>
        </thead>
        <tbody id="data">
    </table>    
    <!-- Calling the Crypto API via the JS -->
    <!-- <script src="../js/crypto.js"></script> -->
    <!-- <script src="../js/crypto.js"></script> -->


</body>
</html>