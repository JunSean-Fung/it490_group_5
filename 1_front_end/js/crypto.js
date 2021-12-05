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
    console.log(response)
}).catch((error) => {
    console.log(error)
})