<?php

$Chost = "localhost";
$Cuser = "root";
$Cpass = "";
$Cfb = "Pyoyecto_Movie_Web";

$Con = new mysqli($Chost,$Cuser,$Cpass,$Cfb);

if($Con->connect_errno){
    die("Ha ocurrido un error");
}
?>