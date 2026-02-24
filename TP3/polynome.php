<?php
$a=3;
$b=6;
$c=3;
$delta=$b**2-4*$a*$c;
if ($delta>0){
    $racine1 = -$b - (sqrt($delta) / (2*$a));
    echo $racine1;
    $racine2 = -$b + (sqrt($delta) / (2*$a));
    echo $racine2;
}
elseif ($delta=0){
    $racine0 = -$b / (2*$a);
    echo $racine0;
}
else {
    echo "Le polynôme n’admet pas de racine.";
}
?>