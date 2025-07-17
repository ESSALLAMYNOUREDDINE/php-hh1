<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex2.php" method="post">
        <label for="">Designation: </label>
        <input type="text" name="designation" value=""><br><br>
        <label for="">Prixht: </label>
        <input type="text" name="prixht" value=""><br><br>
        <label for="">Quantité: </label>
        <input type="number" name="quantite" value="" min="1" max="10"><br><br>
        <label for="">Categorie: </label>
        <select name="categorie" id="">
            <option value="A">A</option>
            <option value="B">B</option>
        </select><br><br>
        <label for="">Livraison: </label>
        <label for="">Oui</label>
        <input type="radio" name="livraison" value="oui">
        <label for="">Non</label>
        <input type="radio" name="livraison" value="non"><br><br>
        <label for="suplement">Suplement: </label>
        <label for="papier">papier</label>
        <input type="checkbox" name="papier" value="papier">
        <label for="sac">sac</label>
        <input type="checkbox" name="suplement" id="" value="sac"><br><br>   
        <input type="submit" value="envoyer">
        <input type="reset">    
    </form>
    <?php
    $prix=0;
    $quantite=0;
    $categorie="";
    $livraison="";
    if(isset($_POST["prix"]))
    {
        $prix=$_POST["prix"];
    }
    if(isset($_POST["quantite"]))
    {
        $quantite=$_POST["quantite"];
    }
    if(isset($_POST["categorie"]))
    {
        $categorie=$_POST["categorie"];
    }
    if(isset($_POST["livraison"]))
    {
        $livraison=$_POST["livraison"];
    }
    $total=0;
    $total=$_POST["prixht"]*$_POST["quantite"];
    if($categorie=="A")
    {
        $total=$total+$total*19/100;
    }
    elseif($categorie=="B")
    {
        $total=$total+$total*20/100;
    }
    if($livraison=="oui")
    {
        $total=$total+30;
    }
    if(isset($_POST["papier"]))
    {
        $total+=10;
    }
    if(isset($_POST["sac"]))
    {
        $total+=5;
    }
    echo "total a payer=".$total;

    ?>
</body>
</html>