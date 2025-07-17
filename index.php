<?php
$var1=3;echo gettype($var1);
echo"<br>";
$var2=2.5;echo gettype($var2);
echo"<br>";
$var3="dev103";echo gettype($var3);
echo"<br>";
$var4=true;echo gettype($var4);
echo"<br>";
$var5=null;echo gettype($var5);
echo"<br>";
$variable="5";echo gettype($variable);
echo"<br>";
settype($variable,"int");echo gettype($variable);
echo"<br>";
$var6="ali";var_dump($var6);
echo"<br>";
$var7=111;var_dump($var7);
echo"<br>";
//==============
$var6="ali";
echo (is_string($var6));
echo (is_bool($var6));
echo"<br>";
define("pi",3.14);//pour déclarer une constante
echo(pi);
echo"<br>";
?>