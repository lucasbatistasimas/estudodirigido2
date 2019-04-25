<?php



    $par=0;
    $impar=0;
    $cont=1;

    do{
        print  "Digite o número: ";
        $n  = (float)fgets (STDIN);
    
    if ($n % 2 == 0){
        $par ++ ;
    }
    
    if ( $n % 2 != 0){
        $impar ++;
    }

    $cont ++ ;
}

    while ($cont <= 10);

    if ( $impar != 1  and  $par != 1 ){

        print  " Quantidade de dados impares: $impar \n Quantidade de dados pares: $par " ;
    }

    elseif ($impar == 1  and  $par != 1 ){

        print  "Quantidade de número impar: $impar \n Quantidade de pares: $par ";}
    
    elseif ($impar =! 1  and  $par == 1 ) {
    
        print  " Quantidade de números iguais: $impar \n Quantidade de número: $par ";}
    
    elseif ( $impar == 1  and  $par == 1 )  {
    
        print  " Quantidade de número impar: $impar \n Quantidade de número: $par " ;};