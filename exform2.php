<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if (isset($_POST["A"])) {
    $b=$_POST["B"];
}
else{
    $b="";
}
if (isset($_POST["B"])) {
    $a=$_POST["A"];
}
else{
    $a="";
}
if (isset($_POST["C"])) {
    $d=$_POST["D"];
}
else{
    $d="";
}
if (isset($_POST["D"])) {
    $c=$_POST["C"];
}
else{
    $c="";
}
?>
<body>
    <form action="exform2.php" method="post">
        <label for="a">A</label>
        <input type="text" name="A" valeu="<?=$a ?>" >
        <label for="b">B</label>
        <input type="text" name="B" value="<?=$b?>">
        <label for="c">C</label>
        <input type="text" name="C" valeu="<?=$c ?>" >
        <label for="d">D</label>
        <input type="text" name="D" value="<?=$d?>">
        <input type="submit">
    
</body>
</html>