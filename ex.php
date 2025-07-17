<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ex php</title>
</head>

<body>
    <form method="post" action="ex.php">
        <input type="number" name="a">
        <select name="operation">
            <option value="+">addition</option>
            <option value="*">multiplication</option>
            <option value="/">division</option>
            <option value="-">saustraction</option>
        </select>
        <input type="number" name="b">
        <input type="submit" value="calculer">
    </form>
    <?php
    if(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["operation"])){
        if($_POST["operation"]=="+")
        {
            echo $_POST["a"].$_POST["operation"].$_POST["b"]."=".$_POST["a"]+$_POST["b"];
        }
        elseif($_POST["operation"]=="*")
        {
            echo $_POST["a"].$_POST["operation"].$_POST["b"]."=".$_POST["a"]*$_POST["b"];
        }
        elseif($_POST["operation"]=="/")
        {
            if($_POST["b"]==0){
                echo("impossible de divise par 0");
            }
            else{                
                echo $_POST["a"].$_POST["operation"].$_POST["b"]."=".$_POST["a"]/$_POST["b"];
            }  
        }
        elseif($_POST["operation"]=="-")
        {
            echo $_POST["a"].$_POST["operation"].$_POST["b"]."=".$_POST["a"]-$_POST["b"];        
        }
    }
    ?>
</body>
</html>