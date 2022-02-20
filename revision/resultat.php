<?php
var_dump($_GET);
$mysql=mysqli_connect('127.0.0.1', 'root','');
mysqli_select_db( $mysql,'bibliotheque');


$req= "

INSERT INTO `livre`(`numLivre`, `titreLivre`, `genreLivre`) VALUES
('".$_GET['id']."','".$_GET['titre']."','".$_GET['genre']."')
";
$result=mysqli_query($mysql,$req);
var_dump($result);
if (!$result){
    echo 'erreur lors de l\'execution de la requete';
}
else{
    echo'requete avec sucsces';
}
?>