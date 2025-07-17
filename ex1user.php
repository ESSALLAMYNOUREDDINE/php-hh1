<?php
session_start();
if($_SESSION["loginconnect"]=="user"){
    echo"user page";
}
else{
    header("location:ex1index.html");
}
?>