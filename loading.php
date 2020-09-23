<?php
    include 'connect.php';
    include 'echo.php';
    $count = ($_POST["count"]);
    $j = ($_POST["j"]);
    $obj = json_decode($json,true);
    $obj_length = count($obj);
    $count += 3;
        if($count <= $obj_length){
            for ($i = $j; $i < $count; $i++) {
                $image = $obj[$i]['image'];
                $rubrica = $obj[$i]['rubrica'];
                $descript = $obj[$i]['descript'];
                $annotation = $obj[$i]['annotation'];
                $comments = $obj[$i]['comments'];
                $link = $obj[$i]['link'];
                if($rubrica == "") {
                    noRubric($image, $descript, $annotation, $comments, $link);
                } else {
                    rubric($image, $rubrica, $descript, $annotation, $comments, $link);
                }
                if($count == $obj_length) {
                    ?>
                    <script>
                        $(".load").addClass('d-none');
                    </script>
                    <?php
                }
            }
        }

