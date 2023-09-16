<?php

$interi=[];
$a=5;

for($i=0;$i<$a;$i++)
{
    echo "Inserisci numero\n";
    $interi[$i]= readline();
}

for($i=count($interi)-1; $i>0;$i--)
{
    echo "Numeri al contrario: $interi[$i]\n";
}