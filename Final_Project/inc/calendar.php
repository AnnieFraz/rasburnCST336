<?php

if(isset($_POST['func']) && !empty($_POST['func'])){
    switch ($_POST['func']){
        case 'getCalender':
            getCalender($_POST['year'], $_POST['month']);
            break;
        case 'getEvents':
            getEvents($_POST['date']);
            break;
        default:
            break;
    }
}
function getCalender($year = '', $month='')
{
    $dateYear = ($year != '')?$year:date("Y");
    $dateMonth = ($month != '')?$month:date("M");
    $date = $dateYear.'-'.$dateMonth.'-01';
    $firstDay = date("F", strtotime($date));
}







?>