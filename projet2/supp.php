<?php
var_dump($_POST);
$mysql=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($mysql,'projet');
$i=$_POST['id'];
$req= "delete  FROM `ajout` WHERE id='$i'; ";
$res=mysqli_query($mysql,$req);
?>
