$(function() {
    $('.dropdown-rubriks-name').click( function(e) {
        $(e.target.querySelector('.fa-chevron-down')).toggleClass('fa-chevron-up');
    });
    $('.dropdown-company-name').click( function(e) {
        $(e.target.querySelector('.fa-chevron-down')).toggleClass('fa-chevron-up');
    });
    $('.fa-chevron-down').click( function(e) {
        $(e.target).toggleClass('fa-chevron-up');
    });
});





var settings = {
"async": true,
"crossDomain": true,
"url": "./product.json",
"method": "GET"
}

$.ajax(settings).done(function (response) {
// console.log(response);

// var content = response.resource;
// $("#windSpeed").append(content);

// });

for (let i = 0; i < 3; i++) {
    let image = response[i].image;
    let rubrica = response[i].rubrica;
    let descript = response[i].descript;
    let annotation = response[i].annotation;
    let comments = response[i].comments;
    let link = response[i].link;

    if(rubrica == "") {
        $(".load").before(
            '<div class="col-md-6 col-lg-4 p-0 news-item">'+
                '<div class="news-image">' + 
                '<img class="w-100" src="'+image+'" alt="">'  + '</div>'+
                '<div class="news-content-notrubric">' +
                    '<div class="news-desctipt"><p>' + descript + '</p></div>' +
                    '<div class="news-annotation"><p>' + annotation.substring(0,30) + '...</p></div>' +
                    '<div class="news-down-link d-flex justify-content-between">' +
                        '<div class="news-comments">'+'<img class="" src="./images/Vector.png" alt="">'+'<p>' + comments + '</p>'+'</div>' +
                        '<div class="news-link">' + '<a href="' + link + '" target="_blank">Подробнее</a>' + '</div>' +
                    '</div>' +
                '</div>' +
            '</div>'
        );
    } else {
        $(".load").before(
            '<div class="col-md-6 col-lg-4 p-0 news-item">'+
                '<div class="news-image">' + 
                '<img class="w-100" src="'+image+'" alt="">'  + '</div>'+
                '<div class="news-content">' +
                    '<div class="news-rubrica"><p>' + rubrica + '</p></div>' +
                    '<div class="news-desctipt"><p>' + descript + '</p></div>' +
                    '<div class="news-annotation"><p>' + annotation.substring(0,30) + '...</p></div>' +
                    '<div class="news-down-link d-flex justify-content-between">' +
                        '<div class="news-comments">'+'<img class="" src="./images/Vector.png" alt="">'+'<p>' + comments + '</p>'+'</div>' +
                        '<div class="news-link">' + '<a href="' + link + '" target="_blank">Подробнее</a>' + '</div>' +
                    '</div>' +
                '</div>' +
            '</div>'
        );
    }
}
});


$(function() {

    var count = 3;
    var j = 3;
    $('.load-more').on('click', function(){
        count +=3;
        const btn = $(this);
        const loader = btn.find('.spinner-grow ');
        const icon = btn.find('.fa-redo-alt');
        btn.attr('disabled', true);
        loader.removeClass('d-none');
        icon.addClass('d-none');
        setTimeout(function() {
            loader.addClass('d-none');
            btn.attr('disabled', false);
            icon.removeClass('d-none');
            $.ajax(settings).done(function (response) {
                if(count <= response.length){
                    for (let i = j; i < count; i++) {
                        let image = response[i].image;
                        let rubrica = response[i].rubrica;
                        let descript = response[i].descript;
                        let annotation = response[i].annotation;
                        let comments = response[i].comments;
                        let link = response[i].link;
                        j++;
                        if(rubrica == "") {
                            $(".load").before(
                                '<div class="col-md-6 col-lg-4 p-0 news-item">'+
                                    '<div class="news-image">' + 
                                    '<img class="w-100" src="'+image+'" alt="">'  + '</div>'+
                                    '<div class="news-content-notrubric">' +
                                        '<div class="news-desctipt"><p>' + descript + '</p></div>' +
                                        '<div class="news-annotation"><p>' + annotation.substring(0,30) + '...</p></div>' +
                                        '<div class="news-down-link d-flex justify-content-between">' +
                                            '<div class="news-comments">'+'<img class="" src="./images/Vector.png" alt="">'+'<p>' + comments + '</p>'+'</div>' +
                                            '<div class="news-link">' + '<a href="' + link + '" target="_blank">Подробнее</a>' + '</div>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>'
                            );
                        } else {
                            $(".load").before(
                                '<div class="col-md-6 col-lg-4 p-0 news-item">'+
                                    '<div class="news-image">' + 
                                    '<img class="w-100" src="'+image+'" alt="">'  + '</div>'+
                                    '<div class="news-content">' +
                                        '<div class="news-rubrica"><p>' + rubrica + '</p></div>' +
                                        '<div class="news-desctipt"><p>' + descript + '</p></div>' +
                                        '<div class="news-annotation"><p>' + annotation.substring(0,30) + '...</p></div>' +
                                        '<div class="news-down-link d-flex justify-content-between">' +
                                            '<div class="news-comments">'+'<img class="" src="./images/Vector.png" alt="">'+'<p>' + comments + '</p>'+'</div>' +
                                            '<div class="news-link">' + '<a href="' + link + '" target="_blank">Подробнее</a>' + '</div>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>'
                            );
                        }
                    }
                } else {
                    $(".load").addClass('d-none');
                }
            });
        }, 1000);
    });
});

