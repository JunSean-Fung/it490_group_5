<?php
    /* Purpose: 
        (1) Crypto-related, this page display the search result
    */
    #include '../projectX/php/head.php';
?>

<!doctype html>
<html lang="en">
<head>
    <title>Search Result</title>
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
    
    <main>

    </main>

    <!-- Table with search result from the API data -->
    <table class="table table-bordered" style="margin-top:20px">
        <thead>            
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Symbol</th>
        </thead>
        <tbody id="data">
    </table>    

    <!-- Footer -->
    <footer class="text-muted footer">
        <div>
        <ul>
            <li><a href="../projectX/php/about.php">About Us</a></li>
            <li><a href="https://github.com/JunSean-Fung/it490_group_5">Github</a></li>
        </ul>
        </div>
    </footer>

    <!-- Calling the Crypto API via the JS -->
    <script src="../js/crypto_searchBar.js"></script>

</body>
</html>