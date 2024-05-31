<?php
include_once './Viajes.php';
$obj=new Viajes();
$cod=$_REQUEST["id"];
$bol=$_REQUEST["cod"];
$obj->anula($bol);
header("location: pagPasajeros.php?id=" . $cod);   
?>

