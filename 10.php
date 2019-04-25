<?php

    print"Informe ao usuario o valor de a: ";
    $a = (float)fgets(STDIN);
    print"Informe o valor de b :";
    $b = (float)fgets(STDIN);
    print"Informe o valor de c :";
    $c = (float)fgets(STDIN);
// delta
    $delta = (int) ($b*$b)-((4*$a)*$c);
//equação
    $x1 = (int)(-$b + sqrt ($delta)) / (2 * $a);
    $x2 = (int) (-$b - sqrt ($delta)) / (2 * $a);

    if($a == 0){
        echo"Equação não pode ser do segundo grau";
    }elseif($delta < 0){
        echo"A equação não possui raizes reais";
    }elseif($delta == 0){
        echo"A equação possui uma raiz real\n";
        echo"x = $x1";
    }else{
        echo"A equação possui duas raizes reais\n";
        echo"x'= $x1 | x'' = $x2";
    }