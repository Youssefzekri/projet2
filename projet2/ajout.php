<?php
var_dump($_POST);
$mysql=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($mysql,'projet');
$i=$_POST['id'];
$n=$_POST['nom'];
$d=$_POST['dc'];
$s=$_POST['ds'];
$req= "insert into ajout(`id`, `nom`, `dc`, `ds`) VALUES('$i','$n','$d','$s')";
$res=mysqli_query($mysql,$req);
?>