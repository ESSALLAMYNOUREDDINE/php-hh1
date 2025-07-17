<?php
    //on definit 2 cookies
    setcookie('hbjhb','1234');
    setcookie('user_pref','dark_theme',time()+3600*24,'/','',false,false);
    //on modifier la valeur du cookie user_id
    setcookie('hhhhb','5678');
    //on supprime le cookie user_pref
    setcookie('user_pref','',time()-3600,'',true,true)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cours.css">
</head>
<body>
    <h1>ddde</h1>
    <?php
       if (isset($_COOKIE['user_id']))
        {echo 'votre ID de session est le' .$_COOKIE['hbjhb']
        ;}
       

    ?>
</body>
</html>