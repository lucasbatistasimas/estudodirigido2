<?php
    echo"Digite o numero de base";
    $base = (int)fgets(STDIN);
    echo"Digite o expoente";
    $exp = (int)fgets(STDIN);

    $pow =(int) pow($base,$exp);

    echo"A potencia de $base elevado a $exp resultou em $pow";
