<?php 
    echo"Digite um numero";
    $a = fgets(STDIN);
    echo"Digite outro numero";
    $b = fgets(STDIN);
    echo"Digite mais um numero";
    $c = fgets(STDIN);


    if($a < $b and $a < $c){
        print"$a é o menor de todos\n";
    }elseif($b < $a and $b < $c){
        print"$b é o menor de todos\n";
    }elseif($c < $b and $c < $a){
        print"$c é o menor de todos\n";
    }
    if($a > $b and $a > $c){
        print"$a é o maior de todos\n";
    }elseif($b > $a and $b > $c){
        print"$b é o maior de todos\n";
    }elseif($c > $b and $c > $a){
        print"$c é o maior de todos\n";
    }

