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

for($i = 0; $i < $kolvo; $i++){
    if($a[$i] === $b[$i]){
        echo "$a[$i] и $b[$i] одинаковые<br>";
    }else{
        echo "$a[$i] и $b[$i] разные<br>";
    }
}