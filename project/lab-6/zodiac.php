<?php
if (isset($_GET['date'])) {
    $date = explode('-', $_GET['date']);
    $month = (int)$date[1];
    $day = (int)$date[2];
    if ((($month == 3) && ($day >= 21)) || (($month == 4) && ($day <= 20))) {
        echo "овен";
    } elseif ((($month == 4) && ($day >= 21)) || (($month == 5) && ($day <= 20))) {
        echo "телец";
    } elseif ((($month == 5) && ($day >= 21)) || (($month == 6) && ($day <= 21))) {
        echo "близнецы";
    } elseif ((($month == 6) && ($day >= 22)) || (($month == 7) && ($day <= 22))) {
        echo "рак";
    } elseif ((($month == 7) && ($day >= 23)) || (($month == 8) && ($day <= 23))) {
        echo "лев";
    } elseif ((($month == 8) && ($day >= 23)) || (($month == 9) && ($day <= 23))) {
        echo "дева";
    } elseif ((($month == 9) && ($day >= 24)) || (($month == 10) && ($day <= 23))) {
        echo "весы";
    } elseif ((($month == 10) && ($day >= 24)) || (($month == 11) && ($day <= 22))) {
        echo "скорпион";
    } elseif ((($month == 11) && ($day >= 23)) || (($month == 12) && ($day <= 21))) {
        echo "стрелец";
    } elseif ((($month == 12) && ($day >= 22)) || (($month == 1) && ($day <= 20))) {
        echo "козерог";
    } elseif ((($month == 1) && ($day >= 21)) || (($month == 2) && ($day <= 18))) {
        echo "водолей";
    } elseif ((($month == 2) && ($day >= 19)) || (($month == 3) && ($day <= 20))) {
        echo "рыбы";
    }
}

