<?php
echo $_POST["nom"]."<br>";
echo $_POST["prenom"]."<br>";
session_start();
echo session_id()."<br>";
$_SESSION["nom"]=$_POST["nom"];
$_SESSION["prenom"]=$_POST["prenom"];
$_SESSION["age"]=20;
?>
<a href="page2.php">cliquer ici pour aller à la page2</a>