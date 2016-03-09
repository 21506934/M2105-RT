<?php

function addition($first, $second) {
    return $first+$second;   
}


function soustraction($first, $second) {
    return $first-$second;   
}

function multiplication($first, $second) {
    return $first*$second;   
}


function division($first, $second) {
    return ($second != 0) ? $first/$second : false;   
}

function operation($first, $second, $op) {
    switch($op) {
        case "addition":
            return $op($first, $second);
            
        case "soustraction":
            return $op($first, $second);
            
        case "multiplication":
            return $op($first, $second);
            
        case "division":
            return $op($first, $second);
    }
}

echo "2+3=".operation(2,3, "addition")."<br>";

echo "6-2=".operation(6,2,"soustraction")."<br>";

echo "5*5=".operation(5,5,"multiplication")."<br>";

echo "3/2=".operation(3,2,"dfdfdf")."<br>";

echo "3/0=".operation(3,0,"division")."<br>";