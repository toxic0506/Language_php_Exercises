<?php

$interis=[];
$n=4;

for($i=0;$i<$n;$i++)
{
    echo "Inserisci un numero\n";
    $interis[$i]= readline();
}

for($i=0; $i<count($interis);$i++)
{
    echo "  i numeri sono: $interis[$i]\n";
}