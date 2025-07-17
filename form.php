<?php
echo $_POST['nom']."<br>";
echo "prenom". $_REQUEST["prenom"]."<br>";
echo "age". $_POST["age"]."<br>";
echo "email". $_POST["email"]."<br>";
echo "ville". $_POST["ville"]."<br>";
echo "sexe". $_POST["sexe"]."<br>";
echo "description". $_POST["description"]."<br>";
/*if(isset($_post["lecture"])){
    echo $_POST["lecture"];
}*/
foreach($_POST["loisirs"]as $l){
echo $l;
}
echo "<br>";
echo "daten". $_POST["daten"]."<br>";
?>