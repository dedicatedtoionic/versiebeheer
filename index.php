<?php

    include("./class_text.php");
    include("./class_anothertext.php");
    echo "Hey <br>";
    $text = new Text();
    $textsecond = new Text2();

    echo $text->sometext . "<br>";
    echo $text->secondtext . "<br>";
    echo $textsecond->text3. "<br>";
    echo $text->bored;


    echo "Can we please stop";
    echo "At least we can leave 15 minutes earlier I guess :(";
?>
