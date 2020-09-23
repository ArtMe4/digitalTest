<?php
    include 'connect.php';

    $j = $_POST["j"] ?? 0;
    $show_to = $j + 3;
    $obj = json_decode($json, true);
    $obj_length = count($obj);

    if ($show_to >= $obj_length) {
        $show_to = $obj_length;
    }

    for ($i = $j; $i < $show_to; $i++) {
        $image = $obj[$i]['image'];
        $rubrica = $obj[$i]['rubrica'];
        $descript = $obj[$i]['descript'];
        $annotation = $obj[$i]['annotation'];
        $comments = $obj[$i]['comments'];
        $link = $obj[$i]['link'];
        
        include './templates/card.php';
    }

    if ($show_to >= $obj_length) {
        ?>
        <style>
            .load {
                display: none !important;
            }
        </style>
        <?php
    }

