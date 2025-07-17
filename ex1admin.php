<?php
session_start();
if($_SESSION["loginconnect"]=="admin"){
    echo"admin page";
}
else{
    header("location:ex1index.html");
}

?>