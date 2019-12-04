var url = 'https://newsapi.org/v2/everything?mkt=en-US&' +
          'q=Crypto&blockchain' +
          'from=2019-11-15&' +
          'sortBy=popularity&' +
          'apiKey=9ed8a75149e2409c88c4df13381e8d26';

var req = new Request(url);

//t=title, u=url, i=img. The function inserts the news articles into the latest table
function insertNews(t,u,i,a,s,td){
    $this = td;
    if($this.find(">p")){
        let p = $this.find(">p");
        let text = t + "  - <b>" + a + " from " + s +"</b>";
        p.html(text)
        $this.find(">a").attr("href", u);
        $this.find("img").attr("src", i);
    }

    else {
        $this.find(">a").attr("href", u);
        $this.find("img").attr("src", i);
    }
}

var articles;
fetch(req).then(function(response) {
    response.json().then(function(parsedJson) {
            var td = $(".latest" ).find("td");
            for (var i = 0; i < td.length; i++) {
                let currentChild = td.eq(i);
                console.log(currentChild);
                let title = parsedJson.articles[i].title;
                let url = parsedJson.articles[i].url;
                let image = parsedJson.articles[i].urlToImage;
                let author = parsedJson.articles[i].author;
                let source = parsedJson.articles[i].source.name;
                console.log(parsedJson);
                console.log(title);
                console.log(url);
                console.log(image);
                insertNews(title,url,image,author,source,currentChild)
            }
      });
    })
