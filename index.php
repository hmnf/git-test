<?php

$a = [7, 8, 9];
$b = [6, 8, 9];

function assertArrays(array $a, array $b){
    if(count($a) === count($b)){
        for($i = 0; $i < count($a); $i++){
            if($a[$i] !== $b[$i]){
                return false;
            }
        }
        return true;
    }{
        return false;
    }
}
if(assertArrays($a, $b)){
    echo 'одинаковые';
}else{
    echo 'разные';
}