<?php
function rubric($image, $rubrica, $descript, $annotation, $comments, $link) {
        echo ('<div class="col-md-6 col-lg-4 p-0 news-item">
        <div class="news-image"> 
        <a href="' . $link . '" target="_blank"><img class="w-100" src="' . $image . '" alt=""></a></div>
        <div class="news-content">
            <div class="news-rubrica"><p>' . $rubrica . '</p></div>
            <div class="news-desctipt"><a href="' . $link . '" target="_blank">' . $descript . '</a></div>
            <div class="news-annotation"><p>' . $annotation . '</p></div>
            <div class="news-down-link d-flex justify-content-between">
                <div class="news-comments"><img class="" src="./images/Vector.png" alt=""><p>' . $comments . '</p></div>
                <div class="news-link"><a href="' . $link . '" target="_blank">Подробнее</a></div>
            </div>
        </div>
    </div>');
    }
    function noRubric($image, $descript, $annotation, $comments, $link) {
        echo ('<div class="col-md-6 col-lg-4 p-0 news-item">
        <div class="news-image"> 
        <a href="' . $link . '" target="_blank"><img class="w-100" src="' . $image . '" alt=""></a></div>
        <div class="news-content-notrubric">
        <div class="news-desctipt"><a href="' . $link . '" target="_blank">' . $descript . '</a></div>
            <div class="news-annotation"><p>' . $annotation . '</p></div>
            <div class="news-down-link d-flex justify-content-between">
                <div class="news-comments"><img class="" src="./images/Vector.png" alt=""><p>' . $comments . '</p></div>
                <div class="news-link"><a href="' . $link . '" target="_blank">Подробнее</a></div>
            </div>
        </div>
    </div>');
    }