<?php
if (isset($_GET['year'])) {
    $year = $_GET['year'];
    if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
        echo "Leap";
    } else {
        echo "No";
    }
}