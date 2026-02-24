<?php

$taille=$_POST["taille"];
$poids=$_POST["poids"];
$imc = $poids/$taille**2;

echo "Taille: ",$taille,"m","<br>", "Poids: ",$poids,"kg","<br>";
echo "Votre IMC est de ",round($imc,1),".", "<br>";

if ($imc<16){
    echo "Vous êtes en maigreur extrême et le risque de maladie est élevé.";
}
elseif ($imc<=18.4){
    echo "Vous êtes en insuffisance pondérale et le risque de maladie est moyen.";
}
elseif ($imc<=24.9){
    echo "Vous avez une corpulence normale et le risque de maladie est faible.";
}
elseif ($imc<=29.9){
    echo "Vous êtes en surpoids et le risque de maladie est moyen.";
}
elseif ($imc<=34.9){
    echo "Vous êtes en obésité et le risque de maladie est élevé.";
}
elseif ($imc<=40){
    echo "Vous êtes en obésité sévère et le risque de maladie est très élevé.";
}
elseif ($imc>40){
    echo "Vous êtes en obésité morbide et le risque de maladie est extrêmement élevé.";
}

?>