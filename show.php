<?php
    include 'echo.php';
    $obj = json_decode($json,true);

    for ($i = 0; $i < 3; $i++) {
        $image = $obj[$i]['image'];
        $rubrica = $obj[$i]['rubrica'];
        $descript = $obj[$i]['descript'];
        $annotation = $obj[$i]['annotation'];
        $comments = $obj[$i]['comments'];
        $link = $obj[$i]['link'];
    
        if($rubrica == "") {
            noRubric($image, $descript, $annotation, $comments, $link);     
        } 
        else {
            rubric($image, $rubrica, $descript, $annotation, $comments, $link);
        }
    }