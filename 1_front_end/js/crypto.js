// Use CoinRanking API 

$(document).ready(function() {
    'user strict'; //Strict mode

    // Might need an event handler
    //var searchInput = document.getElementById("CoinSearchInput")
    var searchInput = "bitcoin"
    // var searchInput = document.formxml.xmlname.value;
    var bitCoin = "Qwsogvtv82FCd" 
    
    // searchBar.addEventListener('click', )

    //searchCoin(searchInput);
    rankCoin()
    // Main Functions
    function searchCoin(searchInput) {
        console.log("SearchCoin Sucess");
        var baseUrl = "https://api.coinranking.com/v2/search-suggestions?query=" + searchInput;
        // var proxyUrl = "https://cors-anywhere.herokuapp.com/" // From CORS Anwhere  <-- This one works, but only 50 per 3 minutes, so becareful
        var proxyUrl = "https://crypto1.jf3331945.workers.dev/?" // Cloudflare CORS
        var apiKey = "coinranking8f1fe4cf0e85fa1c2360a15f9e3ba860fb49a89b674f1022"

        fetch(`${proxyUrl}${baseUrl}`, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'x-access-token': `${apiKey}`,
                'Access-Control-Allow-Origin': "*"
            }
        })
        .then((response) =>{           
            if (response.ok) {
                response.json().then((json) => {
                    console.log("searchCoinResponse Success");
                    let coinsData = json.data.coins
                    
                    // If Coin result is found, clear old data
                    if(coinsData.length > 0) {
                        var cryptoCoins = ""
                    }
                    var USDFormatter = new Intl.NumberFormat('en-US', {Style:'currency',currency: 'USD',});
                    
                    // For each loop to populate the search resulte
                    coinsData.forEach((coin) => {
                        cryptoCoins += "<tr>"                        
                        cryptoCoins += `<td> ${coin.name} </td>`;
                        cryptoCoins += `<td> ${coin.symbol} </td>`;
                        cryptoCoins += `<td> ${coin.price} </td>`;"<tr>";
                    })
                    document.getElementById("searchResultCoin").innerHTML = cryptoCoins
                })
            }
        }).catch((error) => {
            console.log(error) 
        })
    }
    function rankCoin() {
        console.log("rankCoin Sucess");
        var baseUrl = "https://api.coinranking.com/v2/coins?limit=5";
        // var proxyUrl = "https://cors-anywhere.herokuapp.com/" // From CORS Anwhere  <-- This one works, but only 50 per 3 minutes, so becareful
        var proxyUrl = "https://crypto1.jf3331945.workers.dev/?" // Cloudflare CORS
        var apiKey = "coinranking8f1fe4cf0e85fa1c2360a15f9e3ba860fb49a89b674f1022"

        fetch(`${proxyUrl}${baseUrl}`, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'x-access-token': `${apiKey}`,
                'Access-Control-Allow-Origin': "*"
            }
        })
        .then((response) =>{           
            if (response.ok) {
                response.json().then((json) => {
                    console.log("rankCoinResponse Success");
                    let coinsData = json.data.coins
                    
                    // If Coin result is found, clear old data
                    if(coinsData.length > 0) {
                        var cryptoCoins = " "
                    }
                    var USDFormatter = new Intl.NumberFormat('en-US', {Style:'currency',currency: 'USD',});

                    // For each loop to populate the search resulte
                    coinsData.forEach((coin) => {
                        let orginalPrice = Number(coin.price);
                        let USDPrice = USDFormatter.format(orginalPrice);                        
                        let price = orginalPrice.toFixed(2);

                        cryptoCoins += "<tr>"                        
                        cryptoCoins += `<td> ${coin.name} </td>`;
                        cryptoCoins += `<td> ${coin.symbol} </td>`;
                        cryptoCoins += `<td> ${price} </td>`;"<tr>";
                    })
                    document.getElementById("data").innerHTML = cryptoCoins
                })
            }
        }).catch((error) => {
            console.log(error) 
        })
    }
    $('#xmlname').change(function () {
        var searchInput = document.formxml.xmlname.value;
        searchCoin(searchInput);
    }) 
})