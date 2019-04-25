<?php



    print "Deseja Far até quanto? ";
    $far= (float) fgets(STDIN);

    print "(O valor *provavelmente* vai ultrapassar o digitado)\n";

sleep (1);
    $f=0;
    $novo=1;

    print "$f $novo ";

    while ($maisnovo<$far){
        $maisnovoainda=$f+$novo;
            print "$maisnovo ";
            $f= $novo;
            $novo= $maisnovo;}