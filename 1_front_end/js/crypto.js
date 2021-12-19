// Uses CoinRanking API

var baseUrl = "https://api.coinranking.com/v2/coins"
var proxyUrl = "https://cors-anywhere.herokuapp.com/"
var apiKey = "coinranking8f1fe4cf0e85fa1c2360a15f9e3ba860fb49a89b674f1022"

fetch(`${proxyUrl}${baseUrl}`, {
    method: "GET",
    headers: {
        'Content-Type': 'application/json',
        'x-access-token': `${apiKey}`,
        'Access-Control-Allow-Origin': "*"
    }
}).then((response) => {
    if(response.ok) {
        response.json().then((json) => {
            console.log(json.data.coins)

            let coinsData = json.data.coins

            if(coinsData.length > 0) {
                var cryptoCoins = ""
            }
            
            // For Each loop
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
    
}).catch((error) => {
    console.log(error)
})