<?php


        print "Digite F ou M para informar seu sexo:\n";
    
        $sex = fgetc(STDIN);
    
        if($sex=="M"){
    
            print "Você é um consagradO (Masculino).\n";       
    
    }
    
    else
    
        if($sex== "F"){ 
    
            print "Você é umA consagradA (Feminino)\n";    
    
    }

    else
    
    if($sex!= "F" or "M"){
    
        print "Inválido.\n";
    }
