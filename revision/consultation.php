<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>doc</title>
</head>
<body>
<h1> Consultation </h1>
<?php
var_dump($_GET);
$mysql=mysqli_connect('127.0.0.1', 'root','');
mysqli_select_db( $mysql,'bibliotheque');
$req= "
SELECT * FROM `livre`";
$result=mysqli_query($mysql,$req);
var_dump($result);
if (!$result){
    echo 'erreur lors de l\'execution de la requete';
    }
    else{
    echo 'requete avec succes';
    }
    
    ?>
<table>
<tr>
<td>Numero du livre</td>
<td>titre du livre</td>
<td>Genre du livre</td>
</tr>


<?php while ($ligne= mysqli_fetch_array($result))
{

    ?>
<tr>
<td>Numero du livre</td>
<td>titre du livre</td>
<td>Genre du livre</td>
</tr>

<tr>

<td><?php echo $ligne['numlivre']?></td>
<td><?php echo $ligne['titrelivre']?></td>
<td><?php echo $ligne['genrelivre']?></td>
</tr>
<?php } 

?>
</table>
    </body>
    </html>