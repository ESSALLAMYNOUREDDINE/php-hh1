<?php
echo $_POST["nbr"];
echo $x=$_POST["nbr"];
$mul=1;
for($l=1;$l<=10;$l++){
$mul=$l*$x;
echo $mul;
}
$fact=1;
for($l=1;$l<= $_POST["nbr"];$l++){
    $fact*=$l;
}
echo " factorielle de".$_POST["nbr"]."est".$fact
?>