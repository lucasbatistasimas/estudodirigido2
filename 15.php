<?php



    print "Digite um número:\n";
    $n1 = (float)fgets(STDIN);

    print "Digite outro número:\n";
    $n2 = (float)fgets(STDIN);

    print "Digite outro número:\n";
    $n3 = (float)fgets(STDIN);

    print "Digite outro número:\n";
    $n4 = (float)fgets(STDIN);

    print "Digite outro número:\n";
    $n5 = (float)fgets(STDIN);

        if($n1>$n2 and $n1>$n3 and $n1>$n4 and $n1>$n5){
            print "O número 1 é maior que os outros.";       
    }

        if($n2>$n1 and $n2>$n3 and $n2>$n4 and $n2>$n5) { 
            print "O numero 2 é maior que os outros.";    
    }

        if($n3>$n2 and $n3>$n1 and $n3>$n4 and $n3>$n5) { 
            print "O numero 3 é maior que os outros.";    
    }

        if($n4>$n2 and $n4>$n1 and $n4>$n3 and $n4>$n5) { 
            print "O número 4 é maior que os outros.";    
    }

        if($n5>$n2 and $n5>$n1 and $n5>$n4 and $n5>$n3) { 
            print "O número 5 é maior que os outros.";    
    }