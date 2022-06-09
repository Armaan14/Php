<?php
    $mark = 91;

    switch($mark){
        case($mark >=90 && $mark <=100):
        echo "You Got A+";
        break;
        case($mark >=80 && $mark <=89):
            echo "You Got A";
             break;
        case($mark >=75 && $mark <=79):
            echo "You Got B+";
             break;
        case($mark >=70 && $mark <=74):
            echo "You Got B";
             break;
        case($mark >=65 && $mark <=69):
            echo "You Got C+";
             break;
        case($mark >=60 && $mark <=64):
            echo "You Got C";
             break;
        case($mark >=50 && $mark <=59):
            echo "You Got D";
              break;
        case($mark >=0 && $mark <=49):
            echo "You Got F";
             break; 
        default:
            echo "Invalid number"; 
    }


?>