<?php
if (isset($_GET['start_ticket']) && isset($_GET['end_ticket'])) {
    $start_ticket = $_GET['start_ticket'];
    $end_ticket = $_GET['end_ticket'];
    $ticket = $start_ticket;
    $happy_ticket_count = 0;
    while ($ticket <= $end_ticket) {
        if (($ticket[0] + $ticket[1]+ $ticket[2]) == ($ticket[3] + $ticket[4]+ $ticket[5])) {
            $happy_ticket_count = $happy_ticket_count + 1;
            echo $ticket , "<br>";
        }
        $ticket = (string)((int)$ticket + 1); //переводим в тикет в число, чтобы можно было +1
        //в обычном состоянии - string, чтобы обращаться как к массиву
    }
    if ($happy_ticket_count == 0) {
        echo 'ни одного билета';
    }
}