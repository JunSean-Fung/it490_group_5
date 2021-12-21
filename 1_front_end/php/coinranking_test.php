<?php
    /* Purpose: 
        (1) Testing the Coin Ranking API with this
    */
    #include '../projectX/php/head.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sample Home Page</title>
    <meta name="description" content="An example of a simple home page screen.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/coinRank.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
        crossorigin="anonymous"></script>
    <script src="../js/coinRank.js"></script>
</head>

<body>
    <div class="wrapper">
        <nav class="navbar navbar-light mb-5">
            <a class="navbar-brand" href="#">
                Cryptocurrency Information Graph
            </a>
        </nav>
        <div class="container">
            <div class="justify-content-center">
                <div class="justify-content-center">
                    <!-- coin svg goes below -->
                    <img src="#" width="30" height="30" class="d-inline-block align-top" alt="">
                    <!-- coin name appended below -->
                    <h1 class="display-4 d-inline-block" id="currency">Bitcoin</h1>
                </div>
                <div>
                    <select id="cryptoList" class="custom-select custom-select-lg mb-3">
                        <option value="0">Bitcoin</option>
                        <option value="1">Ethereum</option>
                        <option value="2">Litecoin</option>
                    </select>
                </div>
                <hr class="my-4">
            </div>
            <div>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <!-- dynamic current price -->
                        <p class="changeFont d-inline-block mb-0">$</p>
                        <p id="currentPrice" class="changeFont d-inline-block mb-0"> </p>
                        <p id="percentChange" class="d-inline-block align-top"></p>
                    </div>
                    <div class="btn-group d-inline-block align-center" id="timeframeButtons">
                        <!--Timeframe radio buttons-->
                        <input type="radio" name="options" value="24h" class="btn-check" id="24h">
                        <label class="btn btn-success" for="24h">24h</label>
                        <input type="radio" name="options" value="7d" class="btn-check" id="7d">
                        <label class="btn btn-success" for="7d">7d</label>
                        <input type="radio" name="options" value="30d" class="btn-check" id="30d">
                        <label class="btn btn-success" for="30d">30d</label>
                        <input type="radio" name="options" value="1y" class="btn-check" id="1y">
                        <label class="btn btn-success" for="1y">1y</label>
                    </div>
                </div>
                <!-- Graph within canvas element -->
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
            </div>
        </div>
        <div id="infoContainer" class="container mt-4">
            <!-- Crypto information -->
        </div>
    </div>
</body>

</html>