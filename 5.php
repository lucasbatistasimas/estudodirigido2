<?php 
    $n1 = 10;
    $n2 = 7;

    $media = ($n1 + $n2)/2;
    
    if($media >= 7 and $media < 10){
        echo"Aluno Aprovado\n";
    }elseif($media >= 10){
        echo"Aluno aprovado com distinção";
    }
    else{
        echo"Aluno reprovado";
    }