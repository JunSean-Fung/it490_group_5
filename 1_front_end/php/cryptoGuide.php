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

    <!-- Bootstrap core CSS -->
    <link href="../css/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/headers.css" rel="stylesheet">
    <link href="../css/product.css" rel="stylesheet">
    <link href="../css/footers.css" rel="stylsheet">
    <link href="../css/carousel.css" rel="stylsheet">
    <link href="../css/gamepage.css" rel="stylesheet">
</head>
<body>
    <!--This is the topbar-->
    <div class="container-fluid">         
        <head>
            <!-- Linked to topBar.css -->
            <link href="../projectX/css/topBar.css" rel="stylesheet">
        </head>
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 border-bottom">
            <h1 id="title" >Project X</h1>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">               
            </ul>
            <!-- Login section -->
            <div class="col-md-3 text-end loginBtn">
                <a href='../projectX/php/login.php'>
                    <button type="button" class="btn btn-outline-primary me-2">Login/Register</button>
                </a>
            </div>
        </header>
    </div>
    <main>
        <section class = "intro">
        <!--Need to make the container height bigger-->
        <div class="bg-image h-100" style = "background-image: url(../images/image2.jpeg)">
            <!--Add image inside this div-->
            <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0,0,0, 0.5);">
                <div class="container">
                    <p class="h4 mb-4 text-white">Every road to riches begins with a search</p>
                    <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="input-group">
                                <div class="form-outline flex-fill" id = "searchWrapper">
                                    <input type="search" id="form1" class="form-control form-control-lg" 
                                        name = "searchBar"
                                        id = "searchBar"
                                        placeholder="search for crypto"/>
                                </div>
                                <!--Need to add search button next to input-->
                                <input type="submit" class="button" id="searchbtn" value="Search">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <div class="album py-5 bg-light">
        <div class="container">
            <h4>Trending Crypto</h4>
            <!-- Table with search result from the API data -->
            <table class="table table-dark table-striped" >
                <thead>            
                    <th scope="col">Name</th>
                    <th scope="col">Symbol</th>
                    <th scope="col">Price</th>
                </thead>
                <tbody id="data">
            </table> 
            <!--             
            <table class = "table table-dark table-striped">
                <thred>
                    <tr>
                    <th>Coin</th>
                    <th>Symbol</th>
                    <th>Price</th>
                    <th>52 Week High</th>
                    <th>52 Week Low</th>
                    </tr>
                </thred>
                <tbody>
                    <tr>
                    <td>Bitcoin</td>
                    <td>BTC</td>
                    <td>$48,900</td>
                    <td>$68,990</td>
                    <td>$17,588</td>
                    </tr>
                    <tr>
                    <td>Ethereum</td>
                    <td>ETH</td>
                    <td>$4,116</td>
                    <td>$4,865</td>
                    <td>$530</td>
                    </tr>
                    <tr>
                    <td>Crypto.com</td>
                    <td>CRO</td>
                    <td>$0.56</td>
                    <td>$0.9698</td>
                    <td>$0.05383</td>
                    </tr>
                    <tr>
                    <td>Decentraland</td>
                    <td>MANA</td>
                    <td>$3.62</td>
                    <td>$5.90</td>
                    <td>$0.0703</td>
                    </tr>
                    <tr>
                    <td>Cardano</td>
                    <td>ADA</td>
                    <td>$1.34</td>
                    <td>$3.10</td>
                    <td>$0.1274</td>
                    </tr>
                </tbody>
            </table>
             -->
            <!-- Crypto Exchanges -->

            <table class = "table table-bordered table-striped table-dark w-25">
                <thread>
                    <h5>Top 5 Crypto Exchanges</h5>
                </thread>
                <tbody>
                    <tr>
                    <td><a class="nav-link" href="https://crypto.com/us">Crypto.com</a></td>
                    </tr>
                    <tr>
                    <td><a class = "nav-link" href="https://etoro.com">eToro</a></td>
                    </tr>
                    <tr>
                    <td><a class = "nav-link" href="https://blockfi.com">BlockFi</a></td>
                    </tr>
                    <tr>
                    <td><a class = "nav-link" href="https://coinmama.com">Coinmama</a></td>
                    </tr>
                    <tr>
                    <td><a class="nav-link" href="https://coinbase.com">CoinBase</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </main>
    <!-- Calling the Crypto API via the JS -->
    <script src="../js/crypto.js"></script>
</body>
</html>