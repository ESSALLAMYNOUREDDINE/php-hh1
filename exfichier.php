<?php
echo $_POST["nom"];
echo "<br>";
echo "nom fichier =".$_FILES["cv"]["name"];
echo "<br>";
echo "taille fichier =".$_FILES["cv"]["size"];
echo "<br>";
echo "type fichier =".$_FILES["cv"]["type"];
echo "<br>";
echo "nom temporaire de fichier =".$_FILES["cv"]["tmp_name"];
echo "<br>";
echo "erreur =".$_FILES["cv"]["error"];
move_uploaded_file($_FILES["cv"]["tmp_name"],
"C:/xampp/mesfichier/".$_FILES["cv"]["name"]);
?>