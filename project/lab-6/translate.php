<?php
if (isset($_GET['number'])) {
    $number = $_GET['number'];
    switch ($number) {
        case '0': echo 'ноль'; break;
        case '1': echo 'один'; break;
        case '2': echo 'два'; break;
        case '3': echo 'три'; break;
        case '4': echo 'четыре'; break;
        case '5': echo 'пять'; break;
        case '6': echo 'шесть'; break;
        case '7': echo 'семь'; break;
        case '8': echo 'восемь'; break;
        case '9': echo 'девять'; break;
    }
}