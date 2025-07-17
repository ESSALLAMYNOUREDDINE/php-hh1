<?php
echo $_GET["nom"];
echo "<br>";
echo $_GET["prenom"];
echo "<br>";
?>
<a href="page3.php?nom=<?=$_GET["nom"]?>&prenom=<?=$_GET["prenom"]?>">aller à la page3</a>