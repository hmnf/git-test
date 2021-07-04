<?php

$a = [7, 8, 9];
$b = [7, 8, 9];

if(count($a) > count($b)){
    $kolvo = count($a);
}elseif(count($a) < count($b)){
    $kolvo = count($b);
}else{
    $kolvo = count($a);
}

$error = null;

for($i = 0; $i < $kolvo; $i++){
    if($a[$i] !== $b[$i]){
        $error = true;
        $break;
    }
}

if($error){
    echo 'разные';
}else{
    echo 'одинаковые';
}