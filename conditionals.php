<?php
/*
==,===,<,>,<=,>=,!=,!==
*/

// $num =5;
// if ($num == 5){
//     echo "$num passed";
// }
// elseif($num = 6){
//     echo "$num passed";

// }
// else{
//     echo "failing";
// }

#switch
$favcolor = 'red';

switch($favcolor){
    case 'red':
        echo "1";
        break;
    case 'blue':
        echo "2";
        break;
    case 'green':
        echo "3";
        break;
    case 'pink':
        echo "4";
        break;
    default:
        echo "final";
}

?>