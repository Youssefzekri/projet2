<?php
var_dump($_POST);
$mysql=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($mysql,'projet');
$i=$_POST['id'];
$d=$_POST['dc'];
$s=$_POST['ds'];
$req= "update `ajout` SET `dc`='$d',`ds`='$s' WHERE id='$i'; ";
$res=mysqli_query($mysql,$req);
?>

