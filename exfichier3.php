<?php
$_POST['nom'];
$_POST['prenom'];
$_FILES["cv"]["name"];
$nouveau_nom_fichier = $_POST['nom'] . "_" . $_POST['prenom'] . "_" . $_FILES['cv']["name"];
if (move_uploaded_file($_FILES["cv"]["tmp_name"], 
    "C:/xampp/mesfichier/".$_FILES['cv']["name"])) {
echo  $nouveau_nom_fichier;
} 
else {
    echo "Erreur";
}