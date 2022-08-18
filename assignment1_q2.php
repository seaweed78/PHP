<?php
     function evaluate($name, $attendance, $hygiene, $rating){
        if($attendance<50 && $hygiene<50){
            echo "$name, You are fired from the Rojan Kirana Passal!";
        } elseif($hygiene<50 && $rating<2){
            echo "$name, You are fired from the Rojan Kirana Passal!";
        }else{
            echo "$name, Not fired for now.";
        }
    }


    evaluate("Kushal Karki", 20, 70, 3);
?>