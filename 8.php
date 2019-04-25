<?php   
    echo"Digite o primeiro preço";
    $p1 = fgets(STDIN);
    echo"Digite o segundo preço";
    $p2 = fgets(STDIN);
    echo"Digite o terceiro preço";
    $p3 = fgets(STDIN);

if($p1 < $p2 and $p1 < $p3){
    echo"$p1 é a melhor escolha";
}elseif($p2 < $p1 and $p2 < $p3){
    echo"$p2 é a melhor escolha";
}elseif($p3 < $p1 and $p3 < $p2){
    echo"$p3 é a melhor escolha";
}