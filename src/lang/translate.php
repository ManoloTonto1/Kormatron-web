<?php

//the following 2 are for changing the type of bathroom.

function change_type($cause){


        include('src/lang/english.php');
    
    
    switch($cause){

        case '0':
            return $lang['male'];
            break;
        case '1':
            return $lang['female'];
            break;
        case '2':
            return $lang['handicapped'];
            break;
        default:
            return $lang['unknown'];
            break;
    }
}
function change_type_reload($cause){

    include('lang/english.php');


        switch($cause){

    case '0':
        return $lang['male'];
        break;
    case '1':
        return $lang['female'];
        break;
    case '2':
        return $lang['handicapped'];
        break;
    default:
        return $lang['unknown'];
        break;
    }
}


//CHANGE FLOOR
function change_floor($cause){


    include('src/lang/english.php');


switch($cause){

    case '0':
        return $lang['floor0'];
        break;
    case '1':
        return $lang['floor1'];
        break;
    case '2':
        return $lang['floor2'];
        break;
    case '3':
        return $lang['floor3'];
        break;
    case '4':
        return $lang['floor4'];
        break;
    case '5':
        return $lang['floor5'];
        break;
    case '6':
        return $lang['floor6'];
        break;
    case '7':
        return $lang['floor7'];
        break;
    case '8':
        return $lang['floor8'];
        break;
    case '9':
        return $lang['floor9'];
        break;
        

    default:
        return $lang['unknown'];
        break;
}
}
function change_floor_reload($cause){

include('lang/english.php');


    switch($cause){

        case '0':
            return $lang['floor0'];
            break;
        case '1':
            return $lang['floor1'];
            break;
        case '2':
            return $lang['floor2'];
            break;
        case '3':
            return $lang['floor3'];
            break;
        case '4':
            return $lang['floor4'];
            break;
        case '5':
            return $lang['floor5'];
            break;
        case '6':
            return $lang['floor6'];
            break;
        case '7':
            return $lang['floor7'];
            break;
        case '8':
            return $lang['floor8'];
            break;
        case '9':
            return $lang['floor9'];
            break;
            
default:
    return $lang['unknown'];
    break;
}
}

function change_status($cause){


    include('src/lang/english.php');


switch($cause){

    case '0':
        return $lang['toilet_clean'];
        break;
    case '1':
        return $lang['toilet_dirty'];
        break;

    default:
        return $lang['unknown'];
        break;
}
}
function change_status_reload($cause){


    include('lang/english.php');


switch($cause){

    case '0':
        return $lang['toilet_clean'];
        break;
    case '1':
        return $lang['toilet_dirty'];
        break;

    default:
        return $lang['unknown'];
        break;
}
}

function todate($cause){
    return date("d-m-Y, g:i a", $cause);


}
?>