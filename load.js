var settings = {
    "async": true,
    "crossDomain": true,
    "url": "./product.json",
    "method": "GET"
    }


    $.ajax(settings).done(function (response) {
        for (let i = 3; i < 6; i++) {
            var image = response[i].image;
            var rubrica = response[i].rubrica;
            var descript = response[i].descript;
            var annotation = response[i].annotation;
            var comments = response[i].comments;
            var link = response[i].link;
        
            // $("#windSpeed").append('<div>' + descript.substring(0,10) + '...</div>');
        }
    });