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

    <!-- Slogan -->
    <div class="container-fluid">
        <div class="row">
            <h1>Every Road to riches start with a search</h1>
        </div>
    </div>
    <!-- Search bar -->
    <form action="" method="post" name="formxml">
        <input type="text" name="xmlname" value="123" id="xmlname">
        <input type="button" onclick="searchCoin();">
    </form>
    <!-- Table with search result from the API data -->
    <table class="table table-bordered" style="margin-top:20px">
        <h1>Top Five Crypto</h1>
        <thead>            
            <th scope="col">Name</th>
            <th scope="col">Symbol</th>
            <th scope="col">Price</th>
        </thead>
        <tbody id="searchResultCoin">
    </table>
    <!-- Calling the Crypto API via the JS -->
    <!-- <script src="../js/crypto.js"></script> -->
    <script src="../js/crypto.js"></script>


</body>
</html>