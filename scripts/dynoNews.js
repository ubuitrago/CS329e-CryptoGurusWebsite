var unirest = require("unirest")

var req = unirest("GET", "https://microsoft-azure-bing-news-search-v1.p.rapidapi.com/search");

req.query({
	"count": "10",
	"offset": "0",
	"mkt": "en-US",
	"q": "cryptocurrency"
});

req.headers({
	"x-rapidapi-host": "microsoft-azure-bing-news-search-v1.p.rapidapi.com",
	"x-rapidapi-key": "c345258603mshdb109d3c71e943bp14fcebjsn0c94d6025397"
});


req.end(function (res) {
	if (res.error) throw new Error(res.error);

	console.log(res.body);
});