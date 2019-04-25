<?php

echo"Digite o primeiro numero: \n";
$n1 = fgets(STDIN);
echo"Digite o segundo numero: \n";
$n2 = fgets(STDIN);


$maior = ($n1 > $n2)?$n1: $n2; 
$maior = ($maior > $n2)? $maior: $n2;

print "O maior numero é $maior";