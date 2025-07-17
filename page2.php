<?php
session_start();##il est necessaire pour faire again session start bcuz it doesnt recognize the session
echo $_SESSION["nom"]."<br>";
echo $_SESSION["prenom"]."<br>";
echo $_SESSION["age"];
#unset il permet de supprimer un valeur:
#unset($_SESSION["nom"]);
#session_unset() il permet de supprimer tout les elements de fichier:
#session_unset();
#session_destroy() il permet de supprimer le fichier:
session_destroy();
?>
<br>
<a href="page3.php">cliquer pour aller à page3</a>