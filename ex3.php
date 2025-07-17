<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $villesmaroc=array("casa","rabat","fes");
    $villesfrance=array("paris","marseille","lyon");
    $villesusa=array("newyork","florida","hollywood");
    ?>
<body>
    <form action="ex3.php" method="post">
        <select name="pays" id="">
            <option value="maroc">Maroc</option>
            <option value="france">France</option>
            <option value="usa">USA</option>
        </select>
        <input type="submit">
        <label for="">villes</label>
        <select name="villes" id="">
            <?php
            if($_POST["pays"]=="maroc")
            {
                foreach($villesmaroc as $ville)
                {
                    echo"<option>".$ville."</option>";
                }
            }
            elseif($_POST["pays"]=="france")
            {
                foreach($villesfrance as $ville)
                {   ?>
                    <option>
                        <?=$ville?>
                    </option>
                    <?php
                }
            }
            elseif($_POST["pays"]=="usa")
            {
                foreach($villesusa as $ville)
                {   ?>
                    <option>
                        <?=$ville?>
                    </option>
                    <?php
                }
            }
            ?>
        </select>
    </form>

</body>
</html>