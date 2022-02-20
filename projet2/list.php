<?php
$mysql=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($mysql,'projet');
$req= "select * from ajout";
$result=mysqli_query($mysql,$req);

?>
<table border=1>
    <tr>
        <td>id</td>
        <td>nom</td>
        <td>dc</td>
        <td>ds</td>
        <td>moyenne</td>
    </tr>
    <?php
    while($ligne=mysqli_fetch_array($result))
    {
        ?>
        <tr>
            <h2><td><?php echo $ligne['id'];?></td><h2>
            <h2><td><?php echo $ligne['nom'];?></td><h2>
            <h2><td><?php echo $ligne['dc'];?></td><h2>
            <h2><td><?php echo $ligne['ds'];?></td><h2>
            <h2><td><?php echo (($ligne['ds']*2)+$ligne['dc'])/3 ?></td><h2>
        </tr>
        <?php
    }?>
</table>