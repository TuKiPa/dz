<?php
    echo "задание 1", "<br>";
    $a = 10;
    echo $a, "<br>";
    $a = 20;
    echo $a, "<br>"; // задание 1

    echo "задание 2", "<br>";
    $a = 1 + 2 + 3;
    echo $a, "<br>"; // задание 2

    echo "задание 3", "<br>";
    $a = 10;
    $b = 5;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    echo $result, "<br>"; // задание 3

    echo "задание 4", "<br>";
    $a = 1.5;
    $b = 0.75;
    echo $a + $b, "<br>"; // задание 4

    echo "задание 5", "<br>";
    $a = 5;
    echo -$a, "<br>"; // задание 5

    echo "задание 6", "<br>";
    $a = 10;
    $b = 3;
    echo $a % $b, "<br>"; // задание 6

    echo "задание 7", "<br>";
    $string = mb_strlen("дом");
    echo $string;
        echo "<br>"; // задание 7

    echo "задание 8", "<br>";
    echo "<input type=text size=15>", "<br>";

    echo "задание 9", "<br>";
    $bool = "true";
    echo $bool, "<br>"; // задание 9

    echo "задание 10", "<br>";
    $bool = "false";
    echo $bool, "<br>"; // задание 10

    echo "задание 11", "<br>";
    $NULL = "null";
    echo $NULL, "<br>"; // задание 11

    echo "задание 12", "<br>";
    $a = 1 + 2 + 3 + 4 + 5;
    echo $a, "<br>"; // задание 12

    echo "задание 13", "<br>";
    $s = 60;
    $min = 60;
    $h = 24;
    $day = 365;
    $year = $s * $min * $h * $day;
    echo $year, " секунд в году", "<br>";// задание 13

    echo "задание 14", "<br>";
    $tf = 124;
    $tc = ($tf - 32) * 5 / 9;
    echo $tc;