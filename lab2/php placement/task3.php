<?php

function check ( $number ){
    if ($number%2==0){
        print("The number ${number} is an even number");
    }
    else {
        print("The number ${number} is an odd number");

    }
}
print(check(11));
?>