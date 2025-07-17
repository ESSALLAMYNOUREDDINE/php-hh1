<?php
session_start();
if($_SESSION["loginconnect"]=$_POST["login"]){
    echo"admin page";
}
else{
    header("location:index.html");
}

?>