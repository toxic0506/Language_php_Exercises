<?php

$numeri=[];
$a=10;
$posione=-1;

for($i=0;$i<$a;$i++)
{
    echo "Inserisci numeri\n";
    $numeri[$i]=readline();
}

echo "Inserisci il numero da trovare\n";
$n=readline();

for($i=0; $i<$a;$i++)
{
    if($numeri[$i]==$n)
    {
        echo "Numero trovato\n";
        $posione=$i;
    }
    else
        echo "Numero non trovato\n";
}