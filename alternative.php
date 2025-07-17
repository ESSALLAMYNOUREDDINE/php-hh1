<?php
/*$var1=12;
if ($var1 %2==0){
echo "pair";
}
else{
    echo "impair";
}*/
$poids=60;
$taille=1.78;
$imc=$poids/$taille**2;
if($imc<16.5){
    echo "dinatrision";
}
elseif($imc>=16.5 && $imc<18.5){
    echo "maigre";
}
elseif($imc>=18.5 && $imc<25){
    echo "normal";
}
elseif($imc>=25 && $imc<30){
    echo "surpoids";
}
elseif($imc<30){
    echo "obese";
}
?>