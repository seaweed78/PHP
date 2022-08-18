<?php
    function evaluate($name, $attendance, $hygiene, $rating){
        if($attendance<80 || $hygiene<50 || $rating<2){
            echo   "$name  You are fired from the Rojan Kirana Passal!";
        }
        else{
            echo   "$name , Not Fired for now.";
        }
    }


    evaluate("Kushal Karki", 20, 70, 3);

?>