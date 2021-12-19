// Use CoinRanking API and for the search bar

$(document).ready(function() {
    'user strict'; //Strict mode
    const bitcoin = "Qwsogvtv82FCd"
    var uuid = bitcoin;

    // Functions
    function searchCoin(currency) {
        console.log("SearchCoin Sucess");
        var baseUrl = "https://api.coinranking.com/v2/search-suggestions?query=" + currency;
        var proxyUrl = "https://cors-anywhere.herokuapp.com/" // From CORS Anwhere  <-- This one works, but only 50 per 3 minutes, so becareful
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
                    
                    // If Coin result is found
                    if(coinsData.length > 0) {
                        var cryptoCoins = ""
                    }
                    
                    // For each loop to populate the search resulte
                    coinsData.forEach((coin) => {
                        cryptoCoins += "<tr>"
                        cryptoCoins += `<td> ${coin.uuid} </td>`;
                        cryptoCoins += `<td> ${coin.btcPrice} </td>`;
                        cryptoCoins += `<td> ${coin.rank} </td>`;
                        cryptoCoins += `<td> ${coin.tier} </td>`;
                        cryptoCoins += `<td> ${coin.name} </td>`;
                        cryptoCoins += `<td> ${coin.price} </td>`;
                        cryptoCoins += `<td> ${coin.symbol} </td>`;"<tr>";
                    })
                    document.getElementById("data").innerHTML = cryptoCoins
                })
            }
        })
    }
})