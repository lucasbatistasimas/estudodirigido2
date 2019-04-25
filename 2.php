<?php 
    echo"Digite um número";
    $n = fgets(STDIN);
    
    if($n < 0){
        echo"Esse número é negativo";
    }elseif($n == 0){
        echo"Esse número é nulo";           #Usando outra condição se for 0
    }
    else{
        echo"Esse número é positivo";
    }