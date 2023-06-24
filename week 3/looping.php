<?php
    echo "MENCETAK ANGKA 1 - 10"."<br>";
    echo "<hr>";

    for ($i = 1; $i <= 10; $i++) {
        echo $i . "<br>";
    }

    echo "<br>";

    echo "MENCETAK STRING BUAH";
    echo "<hr>";

    $fruits = ["apel", "mangga", "jeruk", "pisang"];

    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }
?>