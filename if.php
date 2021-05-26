<?php
$even_num = [];
$odd_num = [];

function sort_number($num){
    global $even_num;
    global $odd_num;
    if($num % 2 == 0){
        array_push($even_num, $num);
        
    } elseif($num % 2 == 1){
        array_push($odd_num, $num);
    }
}

sort_number(10);
var_dump($even_num);

sort_number(11);
var_dump($odd_num);

sort_number(12);
var_dump($even_num);
?>