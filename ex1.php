<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])){
$d=$_POST["b"]**2-4*$_POST["c"]*$_POST["a"];
if($d==0){
    $x=-$_POST["b"]/2*$_POST["a"];
    echo $x;
}
elseif($d>0){
    $k=-$_POST["b"]-sqrt($d)/2*$_POST["a"];
    echo $k;echo "<br>";
    $k1=-$_POST["b"]+sqrt($d)/2*$_POST["a"];
    echo $k1;
}
else{
    echo "pas de solution";
}
}
?>
<body>
    <form method="post">
        <input type="text" name="a">
        <input type="text" name="b">
        <input type="text" name="c">
        <input type="submit" value="envoye">
    </form>
</body>
</html>