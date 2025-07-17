<?php
if($_POST["login"]=="admin" && $_POST["password"]=="123"){
    session_start();
    $_SESSION["loginconnect"]=$_POST["login"];
    header("location:ex1admin.php");
}
elseif($_POST["login"]=="user" && $_POST["password"]=="1234"){
    session_start();
    $_SESSION["loginconnect"]=$_POST["login"];
    header("location:ex1user.php");
}
else{
    header("location:ex1index.html");
}

?>