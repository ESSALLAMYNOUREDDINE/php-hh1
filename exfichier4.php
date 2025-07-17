<?php
$_POST['nom'];
$_POST['prenom'];
$_FILES["cv"]["name"];
$cv_nom_prenom = $_POST['nom'] . "_" . $_POST['prenom'] . "_" . $_FILES['cv']["name"];
if (move_uploaded_file($_FILES["cv"]["tmp_name"], 
    "C:/xampp/mesfichier/".$_FILES['cv']["name"])) {
echo  $cv_nom_prenom;
} 
else {
    echo "Erreur";
}