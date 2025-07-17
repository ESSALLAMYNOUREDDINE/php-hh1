<?php
if($_POST["login"]=="admin" && $_POST["password"]=="123"){
    session_start();
    $_SESSION["loginconnect"]=$_POST["login"];
    header("location:admin.php");
}
else{
    header("location:index.html");
}

?>